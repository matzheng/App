<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\AzAdmin;
use AppBundle\Entity\DedeMember;
class AdminController extends Controller{
	/**
	 * @Route("/azadmin", name="adminloginpage", methods={"GET"})
	 */
	public function loginAction()
	{
		return $this->render('admin/login.html.twig');
	}

	/**
	 * @Route("/azadmin", name="adminloginjs", methods={"GET"})
	 */
	public function loginjsAction(){
		$req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_admin');
        if(!$ck)
            return $this->render("admin/loginjs.html.twig");
        else
        	return new Response('');
	}

	/**
	 * @Route("/azadmin/logout", name="adminlogoutpage", methods={"GET"})
	 */
	public function logoutAction()
	{
		session_unset();
        session_destroy();
        setcookie('anzhi_admin', null);
        return $this->redirectToRoute('adminloginpage');
	}

	/**
	 * @Route("/azadmin/logincheck", name="adminlogincheck", methods={"POST"})
	 */
	public function logincheckAction(){
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		$m = $this->getDoctrine()->getRepository('AppBundle:AzAdmin')->findOneBy(array('uname'=>$uname, 'pwd'=>$password));
		if(!$m)
			return new JsonResponse(array('success'=>'0', 'msg'=>'登录失败'));
		else
		{
			setcookie('anzhi_admin', $m->getId(),time()+3600*24*7);  //设置cookie
			return new JsonResponse(array('success'=>'1', 'msg'=>'登录成功', 'data'=>$m));
		}
	}

	/**
	 * @Route("/azadmin/index", name="adminindexpage", methods={"GET"})
	 */
	public function indexAction(){
		return $this->render('admin/index.html.twig');
	}

	/**
	 * @Route("/azadmin/memberlist", name="adminmemberlist", methods={"GET"})
	 */
	public function memberlistAction(){
		$members = $this->getDoctrine()->getRepository('AppBundle:DedeMember')->findBy(array('mtype'=>'安知'));
		return $this->render('admin/memberlist.html.twig', array('result'=>$members));
	}

	/**
	 * @Route("/azadmin/memberlistdata", name="adminmemberlistdata", methods={"GET"})
	 */
	public function memberlistdataAction()
	{
		$members = $this->getDoctrine()->getRepository('AppBundle:DedeMember')->findBy(array('mtype'=>'安知'));
		return new JsonResponse($members);
	}
}