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
use AppBundle\Entity\AzTopicExpert;
use AppBundle\Entity\AzTopicTags;
use AppBundle\Entity\AzTags;

class PartmentController extends Controller{
    /**
     * @Route("/partment", name="partmentindex", methods={"GET"})
     */
    public function indexAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        $sql = "select a.id,a.tagname, count(b.Id) as topiccount,count(distinct c.mid) membercount,count(distinct d.mid) favcount from az_tags a left join az_topic_tags b on a.id=b.tagid
left join az_answer c on b.tid=c.tid left join az_member_fav d on b.tid=d.tid and c.tid=d.tid
group by a.id,a.tagname order by membercount desc, favcount desc";
        /*
        if(!$ck){
            $sql = "select a.tid,a.title, a.detail,a.mid,a.tags,ifnull(b.uname,'') as uname,b.face,ifnull(b.product,'') product,0 as myfav,ifnull(c.favs,0) favs,ifnull(f.answercount,0) as answercount  from az_topic  a left join dede_member b on a.mid=b.mid left join(select tid,count(fid) as favs from az_member_fav group by tid) c on a.tid=c.tid left join (select count(distinct mid) as answercount, tid from az_answer group by tid) f on a.tid=f.tid where a.qtypes='2' order by a.tid  desc";
        }
        else{
            $sql = "select a.tid,a.title, a.detail,a.mid,a.tags,ifnull(b.uname,'') as uname,b.face,ifnull(b.product,'') product,ifnull(e.fid,0) as myfav,ifnull(c.favs,0) as favs,ifnull(f.answercount,0) as answercount from az_topic  a left join dede_member b on a.mid=b.mid left join (select tid, count(fid) as favs from az_member_fav group by tid) c on a.tid=c.tid left join (select fid,tid from az_member_fav where mid=".$ck.") e on a.tid=e.tid left join (select count(distinct mid) as answercount, tid from az_answer group by tid) f on a.tid=f.tid where a.qtypes='2' order by a.tid desc";
        }
        */

        $em = $this->getDoctrine()->getManager(); 
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('partment/index.html.twig',array('result' =>$q->fetchAll(), 'mid'=>$ck));
    }

    /**
     * @Route("/partmentadd",name="partmentadd")
     */
    public function addAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        //专家列表
        $sql = "select mid, uname, face, ifnull(product,'') product from dede_member where ifnull(mobile,'') != '' and isexpert=1 and mid!=".$ck;
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        //标签列表
        $rep = $this->getDoctrine()->getRepository('AppBundle:AzTags');
        $tags = $rep->findAll();
    	return $this->render("partment/add.html.twig", array('experts'=>$q->fetchAll(), 'tags'=>$tags));
    }

    /**
     * @Route("/tagtopics/{tagid}", defaults={"tagid"=""}, name="tagtopicspage", methods={"GET"})
     */
    public function tagsPartmentAction($tagid){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        //tag
        $rep = $this->getDoctrine()->getRepository('AppBundle:AzTags');
        $tag = $rep->find($tagid);
        //topics
        $sql = "select a.tid,a.title, a.detail,a.mid,a.tags,ifnull(b.uname,'') as uname,b.face,ifnull(b.product,'') product,ifnull(e.fid,0) as myfav,ifnull(c.favs,0) as favs,ifnull(f.answercount,0) as answercount from az_topic  a 
        left join dede_member b on a.mid=b.mid 
        left join (select tid, count(fid) as favs from az_member_fav group by tid) c on a.tid=c.tid 
        left join (select fid,tid from az_member_fav where mid=".$ck.") e on a.tid=e.tid 
        left join (select count(distinct mid) as answercount, tid from az_answer group by tid) f on a.tid=f.tid 
        inner join az_topic_tags t on a.tid=t.tid where a.qtypes='2' and t.tagid=".$tagid." order by favs desc";
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('partment/tagtopics.html.twig', array('tag'=>$tag, 'result'=>$q->fetchAll(), 'mid'=>$ck));
    }
    /**
     * @Route("/partment/adddone", name="partmentadddone", methods={"POST"})
     */
    public function addDoneAction(){
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $tags = $_POST['tags'];
        $tagname = $_POST['tagname'];
        $experts = $_POST['experts'];

        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        //话题
        $t = new AzTopic();
        $t->setTid(time());
        $t->setTitle($title);
        $t->setDetail($desc);
        $t->setMid($ck);
        //$t->setTags($tags);
        $t->setTags($tagname);
        $t->setQtypes('2');    //私董会
        $em = $this->getDoctrine()->getManager();
        $em->persist($t);
        
        $topicid = $t->getTid();

        //标签
        $newtag = new AzTopicTags();
        $newtag->setTid($topicid);
        $newtag->setTagid($tags);
        $em->persist($newtag);

        //添加自己为专家之一
        $myself = new AzTopicExpert();
        $myself->setTid($topicid);
        $myself->setMid($ck);
        $myself->setAddtime(time());
        $em->persist($myself);
        //添加专家   
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');    
        foreach(explode(',', $experts) as $zj){            
            $exp = new AzTopicExpert();
            $exp->setTid($topicid);
            $exp->setMid($zj);
            $exp->setAddtime(time());
            $em->persist($exp);
            //发送短信通知
            $smsconf = $this->container->getParameter('sms');
            $url = "http://106.veesing.com/webservice/sms.php?method=Submit";
            $mb = $rep->find($zj);
            $post_data = "account=".$smsconf['account']."&password=".md5($smsconf['password'])."&mobile=".$mb->getMobile()."&content=专家".$mb->getUname()."，安知有新问题需要你来解答，请尽快登陆上线。";
            $this->Post($post_data, $url);
        }

        $em->flush();
        return new JsonResponse(array('success'=> '1', 'msg'=>'问题添加成功',  'data'=>$topicid));
    }

    function Post($curlPost, $url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $return_str = curl_exec($curl);
        curl_close($curl);
        return $return_str;
    }

    /**
     * @Route("/partment/{tid}", name="partmentdetail", defaults={"tid"=""}, methods={"GET"})
     */
    public function partmentdetailAction($tid){
        $rep = $this->getDoctrine()->getRepository('AppBundle:AzTopic');
        $t = $rep->find($tid);
        if(!$t)
            return $this->redirectToRoute('homepage');
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');
        $author = $rep->find($t->getMid());
        //当前登录用户
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        //所有相关回答
        $sql = "select a.Aid,a.answer,a.mid,b.uname,b.face,ifnull(b.product,'') product,ifnull(c.zans,0) as zans,ifnull(d.zid,0) as myzan from az_answer a inner join dede_member b on a.mid=b.mid left join (select aid, ifnull(count(time),0) zans from az_answer_like group by aid) c on a.aid=c.aid left join (select aid, time as zid from az_answer_like where mid=".$ck.") d on a.aid=d.aid where a.tid=".$t->getTid()." order by zans desc,a.Aid desc";
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        //当前用户收藏情况
        $favsql = "select ifnull(count(fid),0) as favs, ifnull(b.myfav,0) as myfav from az_member_fav a left join (select tid,ifnull(fid, 0) as myfav from az_member_fav where mid=".$ck." and tid=".$tid.") b on a.tid=b.tid  where a.tid=".$tid;
        $favq = $em->getConnection()->prepare($favsql);
        $favq->execute();
        //总席位
        $experts = "select distinct mid from az_topic_expert where tid=".$tid;
        $expq = $em->getConnection()->prepare($experts);
        $expq->execute();
        //已用席位
        $used = "select count(distinct mid) as used from az_answer where tid=".$tid;
        $usedq = $em->getConnection()->prepare($used);
        $usedq->execute();
        //是否被邀
        $invited = "select count(mid) as invited from az_topic_expert where tid=".$tid." and mid=".$ck;
        $invitedq = $em->getConnection()->prepare($invited);
        $invitedq->execute();
        return $this->render('partment/partmentdetail.html.twig', array('topic'=>$t,'author'=>$author, 'loginuser'=>$ck, 'answers'=>$q->fetchAll(), 'favs'=>$favq->fetchAll()[0], 'xiwei'=> $expq->fetchAll(), 'used'=>$usedq->fetchAll()[0], 'invited'=>$invitedq->fetchAll()[0]));
    }

    /**
     * @Route("/panswer/{tid}", name="partmentanswer", defaults={"tid"=""}, methods={"GET"})
     */
    public function partmentanswerAction($tid){
        //当前登录用户
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        return $this->render("partment/answer.html.twig", array('tid'=>$tid, 'mid'=>$ck));
    }
}