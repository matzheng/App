<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\AzTopic;
use AppBundle\Entity\AzApply;
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
        //赞数
        $zansql = "select ifnull(count(a.time),0) as zans from az_answer_like a inner join az_answer b on a.aid=b.Aid where b.mid=".$ck;
        $zanq = $em->getConnection()->prepare($zansql);
        $zanq->execute();
        //私董会总数
        $sdh = "select sum(numbers) as allcount from (
            select count(tid) numbers from az_topic where mid=".$ck." and qtypes=2
            union
            select count(a.Aid) numbers from az_answer a inner join az_topic b on a.tid=b.tid where a.mid=".$ck." and b.qtypes=2
            ) a";
        $sdhq = $em->getConnection()->prepare($sdh);
        $sdhq->execute();
        return $this->render('my/index.html.twig', array('data'=>$m, 'answers'=>$q->fetchAll()[0]['answers'], 'favs'=>$favq->fetchAll()[0]['favs'], 'zans'=>$zanq->fetchAll()[0]['zans'], 'sdh'=>$sdhq->fetchAll()[0]['allcount']));
    }

    /**
     * @Route("/fav", name="myfav", methods={"GET"})
     */
    public function myfavAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        $sql = "select a.tid,b.title,b.detail,b.qtypes from az_member_fav a inner join az_topic b on a.tid=b.tid where a.mid=".$ck." order by a.fid desc";
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
        //所有回答
        $sql = "select a.Aid,a.answer,a.tid,b.title, b.detail,b.qtypes,a.createtime from az_answer a inner join az_topic b on a.tid=b.tid where a.mid=".$ck." and b.qtypes=1 order by a.Aid desc";
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        //所有我的提问
        $mytopics = $this->getDoctrine()->getRepository('AppBundle:AzTopic')->findBy(array('mid'=>$ck, 'qtypes'=>1));
        return $this->render('my/answers.html.twig',array('data'=>$q->fetchAll(), 'mytopics'=>$mytopics));
    }

    /**
     * @Route("/myprofile", name="myprofilepage", methods={"GET","POST"})
     */
    public function mydetail(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        $file = "";
        //读取数据
        $m = $this->getDoctrine()->getRepository('AppBundle:DedeMember')->find($ck);
        if($req->getMethod() == 'POST') 
        {
            $em = $this->getDoctrine()->getManager();
            $m->setUname($req->request->get('uname'));
            $m->setEmail($req->request->get('email'));
            $file = $req->files->get('upload');
            if($file != null)
            {
                $filename = str_replace('image/',$ck.'-'.time().'.', $file->getMimeType());
                $path = $this->get('kernel')->getRootDir().'/../web/upload/';
                $file->move($path, $filename);

                $m->setFace("/upload/".$filename);
            }
            $em->flush();
        }
        
        return $this->render('my/profile.html.twig', array('data'=>$m, 'file'=>$file));
    }

    /**
     * @Route("/mypartment", name="mypartmentpage", methods={"GET"})
     */
    public function mypartmentAction(){
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');
        //所有回答
        $sql = "select a.Aid,a.answer,a.tid,b.title, b.detail,b.qtypes,a.createtime from az_answer a inner join az_topic b on a.tid=b.tid where a.mid=".$ck." and b.qtypes=2 order by a.Aid desc";
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();
        //所有我的提问
        $mytopics = $this->getDoctrine()->getRepository('AppBundle:AzTopic')->findBy(array('mid'=>$ck, 'qtypes'=>2));
        return $this->render("my/partment.html.twig",array('data'=>$q->fetchAll(), 'mytopics'=>$mytopics));
    }
	
	/**
	 * @Route("/applyexpert", name="applyexpertpage", methods={"GET"})
	 */
	public function applyexpertAction(){
		return $this->render('my/applyexpert.html.twig');
	}
	
	/**
	 * @Route("/applyexpertdone", name="allpyexpertdone", methods={"POST"})
	 */
	public function applyexpertDoneAction(){
		$req = Request::createFromGlobals();
		$name = $req->request->get('name');
		$company = $req->request->get('company');
		$title = $req->request->get('title');
		$product = $req->request->get('product');
		$address = $req->request->get('address');
		$desc = $req->request->get('desc');
		
		$a = new AzApply();
		$a->setName($name);
		$a->setCompany($company);
		$a->setTitle($title);
		$a->setProduct($product);
		$a->setAddress($address);
		$a->setMid($req->cookies->get('anzhi_m'));
		$a->setDescription($desc);
		$a->setInserttime(time());
        $em = $this->getDoctrine()->getManager();
        $em->persist($a);
        $em->flush();
		
		return new JsonResponse(array('success'=>'1', 'msg'=>'申请成功，我们将尽快审理您的申请。', 'id'=>$a->getId()));
	}
}