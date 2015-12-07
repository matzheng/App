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
//use Doctrine\ORM\Query\ResultSetMapping;
//use Doctrine\ORM\Query\ResultSetMappingBuilder;

class TopicsController extends Controller{
    /**
     * @Route("/topics", name="topicindex", methods={"GET"})
     */
    public function indexAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        $sql = "";
        if(!$ck){
            $sql = "select a.tid,a.title, a.detail,a.mid,ifnull(b.uname,'') as uname,b.face,0 as myfav,ifnull(c.favs,0) favs from az_topic  a left join dede_member b on a.mid=b.mid left join(select tid,count(fid) as favs from az_member_fav group by tid) c on a.tid=c.tid order by a.tid desc";
        }
        else{
            $sql = "select a.tid,a.title, a.detail,a.mid,ifnull(b.uname,'') as uname,b.face,ifnull(e.fid,0) as myfav,ifnull(c.favs,0) as favs from az_topic  a left join dede_member b on a.mid=b.mid left join (select tid, count(fid) as favs from az_member_fav group by tid) c on a.tid=c.tid left join (select fid,tid from az_member_fav where mid=".$ck.") e on a.tid=e.tid order by a.tid desc";
        }
        $em = $this->getDoctrine()->getManager();
        //$sql = "select a.tid,a.title, a.detail,a.mid,ifnull(b.uname,'') as uname,b.face,ifnull(c.zans,0) as zans from az_topic  a left join dede_member b on a.mid=b.mid left join (select n.tid,sum(n.zan) as zans from az_topic_like n group by n.tid) c on a.tid=c.tid order by a.tid desc";

        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('topics/index.html.twig', array('result' =>$q->fetchAll(), 'mid'=>$ck));
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
        //当前登录用户
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        //所有相关回答
        $sql = "select a.Aid,a.answer,a.mid,b.uname,b.face,ifnull(c.zans,0) as zans,ifnull(d.zid,0) as myzan from az_answer a inner join dede_member b on a.mid=b.mid left join (select aid, ifnull(count(time),0) zans from az_answer_like group by aid) c on a.aid=c.aid left join (select aid, time as zid from az_answer_like where mid=".$ck.") d on a.aid=d.aid where a.tid=".$t->getTid()." order by a.Aid desc";
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('topics/topicdetail.html.twig', array('topic'=>$t, 'author'=>$author, 'loginuser'=>$ck, 'answers'=>$q->fetchAll()));
    }
}