<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $req = Request::createFromGlobals();
        $ck = $req->cookies->get('anzhi_m');
        if(!$ck)
            return $this->redirectToRoute('loginpage');

        //$session = $this->get('session');
        //return $this->render('default/index.html.twig', array(
        //    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        //));
        //return $this->render('default/index.html.twig',array('mid'=>$session->get('anzhi_m')));
        return $this->render('default/index.html.twig');
    }
}
