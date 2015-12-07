<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\AzMemberFav;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class FavController extends Controller{
    /**
     * @Route("/favpost", name="favpost", methods={"POST"})
     */
    public function indexAction(){
        $tid = $_POST['tid'];
        $mid = $_POST['mid'];
        $fid = $_POST['fid'];
        if(!$tid || !$mid){
            return new JsonResponse(array('success'=>'0', 'msg'=>'数据异常'));
        }

        $em = $this->getDoctrine()->getManager();
        if($fid == '0'){
            $mbfav = new AzMemberFav();
            $mbfav->setFid(time());
            $mbfav->setTid($tid);
            $mbfav->setMid($mid);
            $em->persist($mbfav);
        }
        else{
            $mbfav = $em->getRepository('AppBundle:AzMemberFav')->find($fid);
            $em->remove($mbfav);
        }
        $em->flush();

        $sql = "select ifnull(fid,0) as fid from az_member_fav where tid=".$tid;
        $q = $em->getConnection()->prepare($sql);
        $q->execute();

        $favsql = "select ifnull(count(fid),0) as favs from az_member_fav where tid=".$tid;
        $qfav = $em->getConnection()->prepare($favsql);
        $qfav->execute();
        return new JsonResponse(array('success'=>'1', 'msg'=>$fid == '0' ? '收藏成功': '取消收藏成功', 'fid'=> $fid == '0' ? $q->fetchAll()[0]['fid'] : '0', 'favs'=>$qfav->fetchAll()[0]['favs']));
    }
}