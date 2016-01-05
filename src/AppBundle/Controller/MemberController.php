<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\DedeMemberPerson;

class MemberController extends Controller{
    /**
     * @Route("/login", name="loginpage")
     */
    public function loginAction()
    {
        return $this->render('member/login.html.twig');
    }
    /**
     * @Route("/loginresult", name="loginresult", methods= {"POST"})
     */
    public function loginresultAction(){
        $m = $_POST["m"];
        $p = $_POST["p"];
        $rmb = $_POST["rmb"];
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');
        $user = $rep->findOneBy(array('mobile' => $m, 'pwd'=> md5($p), 'mtype'=>'安知'));
        if(!$user)
            return new JsonResponse(array('success'=>'0', 'msg'=>'手机号或密码错误！'));
        //if($rmb == "1"){
            setcookie('anzhi_m', $user->getMid(),time()+3600*24*7);  //设置cookie
        //}
        //set last login time and login IP
        $user->setLogintime(time());
        $user->setLoginip($this->container->get('request')->getClientIp());
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        //store in session
        $session = $this->get('session');
        $session->set('anzhi_m', $user->getMid());
        return new JsonResponse(array('success'=>'1', 'msg'=>'登录成功'));
    }
    /**
     * @Route("/logout", name="logoutpage", methods={"GET"})
     */
    public  function logoutAction(){
        session_unset();
        session_destroy();
        setcookie('anzhi_m', null);
        //return new Response("已注销");
        return $this->redirectToRoute('homepage');
    }
    /**
     * @Route("/reg", name="regpage")
     */
    public  function  regAction(){
        return $this->render('member/reg.html.twig');
    }
    /**
     * @Route("/regcheck/{mobile}", defaults={"mobile"=""}, name="regcheck", methods={"GET"})
     */
    public function regCheckAction($mobile){
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');
        $u = $rep->findOneBy(array('mobile'=>$mobile, 'mtype'=>'安知'));
        if($u)
            return new JsonResponse(array('success'=>'0','msg'=>'此手机号已注册过'));
        return new JsonResponse(array('success'=>'1','msg'=>'可以注册'));
    }

    /**
     * @Route("/regdone", name="regdone", methods={"POST", "GET"})
     */
    public  function regdoneAction(){
        if(!$_POST){
            return $this->redirectToRoute('regpage');
        }
        $mobile = $_POST['mobile'];
        $pwd = $_POST['pwd'];
        return $this->render('member/regdone.html.twig', array('m'=> $mobile,'p'=>md5($pwd)));
    }

    /**
     * @Route("/regdoneresult", name="regdoneresult", methods={"POST"})
     */
    public function regdoneresultAction(){
        $m = $_POST['m'];   //mobile
        $w = $_POST['w'];   //password
        $n = $_POST['n'];   //uname
        $e = $_POST['e'];   //email
        $s = $_POST['s'];   //sex
        $p = $_POST['p'];   //product
        //数据持久化
        $member = new DedeMember();
        $member->setMobile($m);
        $member->setUserid($m);
        $member->setPwd($w);
        $member->setMtype('安知');
        $member->setUname($n);
        $member->setSex($s);
        $member->setEmail($e);
        $member->setScores(100);
        $member->setJointime(time());
        $member->setLogintime(time());
        $member->setRank(10);
        $member->setJoinip($this->container->get('request')->getClientIp());
        $member->setLoginip($this->container->get('request')->getClientIp());
        $member->setProduct($p);
        $em = $this->getDoctrine()->getManager();
        $em->persist($member);
        $em->flush();
        //dede_member_person

        $member_person = new DedeMemberPerson();
        $member_person->setMid($member->getMid());
        $member_person->setSex($s);
        $member_person->setMobile($m);
        $member_person->setBirthday(new \DateTime('1980-01-01'));
        $member_person->setUname($m);
        $em->persist($member_person);
        $em->flush();
        //set session
        $session = $this->get('session');
        $session->set('anzhi_m', $member->getMid());
        setcookie('anzhi_m', $member->getMid(),time()+3600*24*7);  //设置cookie
        return new JsonResponse(array('success'=>"1", 'msg'=>'注册成功'));
    }

    /**
     * @Route("/memberdetail/{mid}", defaults={"mid": 0}, name="memberdetailpage", methods={"GET"})
     */
    public function memberdetailAction($mid){
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');
        $mb = $rep->find($mid);

        //回答数
        $sql = "select ifnull(count(a.aid),0) as answers from az_answer a inner join az_topic b on a.tid=b.tid where a.mid=".$mid;
        $em = $this->getDoctrine()->getManager();
        $q = $em->getConnection()->prepare($sql);
        $q->execute();

        //赞数
        $zansql = "select ifnull(count(a.time),0) as zans from az_answer_like a inner join az_answer b on a.aid=b.Aid where b.mid=".$mid;
        $zanq = $em->getConnection()->prepare($zansql);
        $zanq->execute();
        return $this->render('member/memberdetail.html.twig', array('member'=> $mb,'answers'=>$q->fetchAll()[0]['answers'], 'zans'=>$zanq->fetchAll()[0]['zans']));
    }

    /**
     * @Route("/reset", name="resetpage", methods={"GET"})
     */
    public function resetAction()
    {
        return $this->render('member/reset.html.twig');
    }

    /**
     * @Route("/resetdone", name="resetdonepage", methods={"GET"})
     */
    public function resetdonepageAction(){
        return $this->render('member/resetdone.html.twig');
    }

    /**
     * @Route("/resetresult", name="resetresult", methods={"POST"})
     */
    public function resetresultAction(){
        //再次确保手机号未在ajax中被篡改
        $tel = $_POST['tel'];
        $pwd = $_POST['pwd'];
        if($tel != $this->getRequest()->getSession()->get('resettel'))
        {
            return new JsonResponse(array('success'=>'0', 'msg'=>'请确认收到验证码的手机号'));
        }
        //检测手机号是否存在
        $rep = $this->getDoctrine()->getRepository('AppBundle:DedeMember');
        $u = $rep->findOneBy(array('mobile'=>$tel, 'mtype'=>'安知'));
        if(!$u){
            return new JsonResponse(array('success'=>'0', 'msg'=>'此手机号尚未注册'));
        }
        else{
            $em = $this->getDoctrine()->getManager();
            $u->setPwd(md5($pwd));
            $em->persist($u);
            $em->flush();
            return new JsonResponse(array('success'=>'1', 'msg'=>'密码修改成功'));
        }

    }
}