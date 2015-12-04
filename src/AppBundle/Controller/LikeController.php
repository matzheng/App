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
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class LikeController extends Controller{
    /**
     * @Route("/like", name="likepost", methods={"POST"})
     */
    public function indexAction(){
        $tid = $_POST['tid'];
        $mid = $_POST['mid'];
        $zan = $_POST['zan'];
        if(!$tid || !$mid){
            return new JsonResponse(array('success'=>'0', 'msg'=>'数据异常'));
        }

        $like = new AzTopicLike();
        $like->setTime(time());
        $like->setTid($tid);
        $like->setMid($mid);
        $like->setZan(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($like);
        $em->flush();

        $sql = "select count(tid) as zans from az_topic_like where tid=".$tid;
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return new JsonResponse(array('success'=>'1', 'msg'=>'点赞成功', 'data'=>$q->fetchAll()[0]['zans']));
    }
}