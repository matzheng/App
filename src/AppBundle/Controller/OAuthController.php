<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class OAuthController extends Controller{
	/**
	 @Route("/oauth/live", name="oauthlive", methods={"POST"})
	 */
	public function liveAction(){
		$request = Request::createFromGlobals();
		$k = $request->get('k', '');
		$response = new Response();
		$response->headers->set('Content-Type', 'text-plain');
		$response->setStatusCode(Response::HTTP_OK);
		if($k == '')
		{
			$response->setContent('fail');
		}
		else
		{
			$response->setContent('pass');
		}
		return $response;
	}

	/**
	 @Route("/oauth/live/fail", name="oauthlivefail", methods={"GET"})
	 */
	public function livefailAction(){
		return new Response("很抱歉，您没有权限访问这个直播。");
	}

	/**
	 @Route("/oauth/vod", name="oauthvod", methods={"POST"})
	 */
	public function vodAction(){
		$request = Request::createFromGlobals();
		$k = $request->get('k', '');
		$response = new Response();
		$response->headers->set('Content-Type', 'text-plain');
		$response->setStatusCode(Response::HTTP_OK);
		if($k == '')
		{
			$response->setContent('fail');
		}
		else
		{
			$response->setContent('pass');
		}
		return $response;
	}

	/**
	 @Route("/oauth/vod/fail", name="oauthvodfail", methods={"GET"})
	 */
	public function vodfailAction(){
		return new Response("很抱歉，您没有权限访问这个点播。");
	}
}