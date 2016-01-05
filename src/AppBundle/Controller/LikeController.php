<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\DedeMemberPerson;
use AppBundle\Entity\AzTopicLike;
use AppBundle\Entity\AzAnswerLike;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class LikeController extends Controller{
    /**
     * @Route("/like", name="likepost", methods={"POST"})
     */
    public function indexAction(){
        $tid = $_POST['tid'];
        $mid = $_POST['mid'];
        $zid = $_POST['zid'];
        if(!$tid || !$mid){
            return new JsonResponse(array('success'=>'0', 'msg'=>'数据异常'));
        }

        $em = $this->getDoctrine()->getManager();
        if($zid == '0'){
            $like = new AzTopicLike();
            //$like->setCreatetime(time());
            $like->setTid($tid);
            $like->setMid($mid);
            $em->persist($like);
            $em->flush();
        }else{
            $like = $em->getRepository('AppBundle:AzTopicLike')->find($zid);
            $em->remove($like);
            $em->flush();
        }

        $sql = "select ifnull(count(time),0) as zans from az_topic_like where tid=".$tid;
        $q = $em->getConnection()->prepare($sql);
        $q->execute();

        $myzan = "select ifnull(time,0) as zid from az_topic_like where mid=".$mid." and tid=".$tid;
        $qzan = $em->getConnection()->prepare($myzan);
        $qzan->execute();
        return new JsonResponse(array('success'=>'1', 'msg'=>'点赞成功', 'data'=>$q->fetchAll()[0]['zans'], 'zid'=>$zid == '0' ? $qzan->fetchAll()[0]['zid'] : '0'));
    }

    /**
     * @Route("/likeanswer", name="likeanswerpost", methods={"POST"})
     */
    public function likeAnswerAction(){
        $aid = $_POST['aid'];
        $mid = $_POST['mid'];
        $zid = $_POST['zid'];

        $em = $this->getDoctrine()->getManager();
        if($zid == '0'){
            $like = new AzAnswerLike();
            $like->setCreatetime(time());
            $like->setMid($mid);
            $like->setAid($aid);
            $em->persist($like);
            $em->flush();
        }else{
            $like = $em->getRepository('AppBundle:AzAnswerLike')->find($zid);
            $em->remove($like);
            $em->flush();
        }

        $sql = "select ifnull(count(time),0) as zans from az_answer_like where aid=".$aid;
        $q = $em->getConnection()->prepare($sql);
        $q->execute();

        $myzan = "select ifnull(time,0) as zid from az_answer_like where mid=".$mid." and aid=".$aid;
        $qzan = $em->getConnection()->prepare($myzan);
        $qzan->execute();

        return new JsonResponse(array('success'=>'1', 'msg'=>'点赞成功', 'data'=>$q->fetchAll()[0]['zans'], 'zid'=>$zid == '0' ? $qzan->fetchAll()[0]['zid'] : '0'));
    }
}