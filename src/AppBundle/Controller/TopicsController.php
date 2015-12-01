<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\DedeMemberPerson;
use AppBundle\Entity\AzTopic;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class TopicsController extends Controller{
    /**
     * @Route("/topics", name="topicindex", methods={"GET"})
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        //$sql =  "select a.tid,a.title, a.detail,a.mid,ifnull(b.uname,'') as uname,b.face,c.zans from az_topic  a left join dede_member b on a.mid=b.mid left join (select n.tid,sum(n.zan) as zans from az_topic_like n group by n.tid) c on a.tid=c.tid order by a.tid desc";
        //$sql = "select p.tid,p.title,p.detail,p.mid, d.uname from AppBundle:AzTopic p left join AppBundle:DedeMember d with p.mid=d.mid left JOIN (select t.tid, sum(t.zan) as zans from AppBundle:AzTopicLike t group by t.tid) c WITH p.tid=c.tid order by p.tid desc";
        //$query = $em->createQuery($sql);
        //$topics = $query->getResult();
        $sql = "select a.tid,a.title, a.detail,a.mid,ifnull(b.uname,'') as uname,b.face,ifnull(c.zans,0) as zans from az_topic  a left join dede_member b on a.mid=b.mid left join (select n.tid,sum(n.zan) as zans from az_topic_like n group by n.tid) c on a.tid=c.tid order by a.tid desc";
        //$rsm = new ResultSetMapping();
        //$rsm->addEntityResult("AppBundle:AzTopic", "a");
        //$rsm->addEntityResult("AppBundle:DedeMember", "b");
        //$rsm->addEntityResult("AppBundle:AzTopicLike", "c");
        //$rsm->addFieldResult("a", "tid", "tid");
        //$rsm->addFieldResult("a", "title", "title");
        //$rsm->addFieldResult("a", "detail", "detail");
        //$rsm->addFieldResult("b", "face", "face");
        //$rsm->addFieldResult("b", "uname", "uname");

        //$query = $em->createNativeQuery($sql, $rsm);

        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('topics/index.html.twig', array('result' =>$q->fetchAll()));
    }

    /**
     * @Route("/addtopic", name="addtopicpage")
     */
    public function addtopicAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        return $this->render('topics/addtopic.html.twig');
    }

    /**
     * @Route("/submittopic", name="submittopicpage", methods={"POST"})
     */
    public function submittopicAction(){
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        $t = new AzTopic();
        $t->setTid(time());
        $t->setTitle($title);
        $t->setDetail($desc);
        $t->setMid($ck);
        $em = $this->getDoctrine()->getManager();
        $em->persist($t);
        $em->flush();
        return new JsonResponse(array('success'=> "1", 'msg'=> "提问成功", 'data'=>$t->getTid()));
    }

    /**
     * @Route("/topic/{tid}",defaults={"tid"=""},name="topicdetail", methods={"GET"})
     */
    public function topicdetailAction($tid){
        $rep = $this->getDoctrine()->getRepository('AppBundle:AzTopic');
        $t = $rep->find($tid);
        if(!$t)
            return $this->redirectToRoute('homepage');
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');
        $author = $rep->find($t->getMid());
        return $this->render('topics/topicdetail.html.twig', array('topic'=>$t, 'author'=>$author));
    }
}