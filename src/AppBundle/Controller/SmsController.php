<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SmsController extends Controller{
	/**
	 * @Route("/sms/{tel}", name="smsget", defaults={"tel"=""}, methods={"GET"})
	 */
	public function indexAction($tel){
		$smsconf = $this->container->getParameter('sms');
		//sms random code
		$code = rand(1111, 9999);
		//url
		$url = "http://106.veesing.com/webservice/sms.php?method=Submit";
		$post_data = "account=".$smsconf['account']."&password=".md5($smsconf['password'])."&mobile=".$tel."&content=您的验证码是：".$code."。请不要把验证码泄露给其他人。";
		$gets = $this->xml_to_array($this->Post($post_data, $url));
		if($gets['SubmitResult']['code'] == "2")
		{
			$this->getRequest()->getSession()->set('tel', $tel);
			$this->getRequest()->getSession()->set('code', $code);
		}
		return new JsonResponse(array('success'=>$gets['SubmitResult']['code'] == "2" ? '1' : '0',  'msg'=>$gets['SubmitResult']['code'] == "2" ? "验证码已发送到您的手机。" : $gets['SubmitResult']['msg']));
	}

	/**
	 * @Route("/smscheckcode", name="smscheckcode", methods={"POST"})
	 */
	public function checkcode(){
		$tel = $_POST['tel'];
		$code = $_POST['code'];

		if($tel != $this->getRequest()->getSession()->get('tel'))
		{
			return new JsonResponse(array('success'=>'0', 'msg'=>'请确认收到验证码的手机号'));
		}
		if($code != $this->getRequest()->getSession()->get('code'))
		{
			return new JsonResponse(array('success'=>'0', 'msg'=>'验证码错误'));
		}
		return new JsonResponse(array('success'=>'1', 'msg'=>'OK'));
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

	function xml_to_array($xml){
		$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
		if(preg_match_all($reg, $xml, $matches)){
			$count = count($matches[0]);
			for($i = 0; $i < $count; $i++){
			$subxml= $matches[2][$i];
			$key = $matches[1][$i];
				if(preg_match( $reg, $subxml )){
					$arr[$key] = $this->xml_to_array( $subxml );
				}else{
					$arr[$key] = $subxml;
				}
			}
		}
		return $arr;
	}
}