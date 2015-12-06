<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
//use AppBundle\Entity\DedeMemberPerson;

class MyController extends Controller{
    /**
     * @Route("/my", name="myindex", methods={"GET"})
     */
    public function indexAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        //读取数据
        $m = $this->getDoctrine()->getRepository('AppBundle:DedeMember')->find($ck);
        if(!$m){
            return new Response('未能找到你的个人数据');
        }
        //被赞的次数

        //回答数
        $sql = "select ifnull(count(a.aid),0) as answers from az_answer a inner join az_topic b on a.tid=b.tid where a.mid=".$ck;
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        //收藏数
        $favsql = "select ifnull(count(fid),0) as favs from az_member_fav where mid=".$ck;
        $favq = $em->getConnection()->prepare($favsql);
        $favq->execute();
        return $this->render('my/index.html.twig', array('data'=>$m, 'answers'=>$q->fetchAll()[0]['answers'], 'favs'=>$favq->fetchAll()[0]['favs']));
    }

    /**
     * @Route("/fav", name="myfav", methods={"GET"})
     */
    public function myfavAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        $sql = "select a.tid,b.title,b.detail from az_member_fav a inner join az_topic b on a.tid=b.tid where a.mid=".$ck;
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('my/fav.html.twig', array('data'=>$q->fetchAll()));
    }

    /**
     * @Route("/myanswers", name="myanswers", methods={"GET"})
     */
    public function myAnswerAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        $sql = "select a.Aid,a.answer,a.tid,b.title, b.detail from az_answer a inner join az_topic b on a.tid=b.tid where a.mid=".$ck;
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        return $this->render('my/answers.html.twig',array('data'=>$q->fetchAll()));
    }
}