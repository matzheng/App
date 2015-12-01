<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\DedeMemberPerson;

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
        return $this->render('my/index.html.twig', array('data'=>$m));
    }

    /**
     * @Route("/fav", name="myfav", methods={"GET"})
     */
    public function myfavAction(){
        return $this->render('my/fav.html.twig');
    }
}