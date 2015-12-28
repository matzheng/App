<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\DedeMemberPerson;

class PartmentController extends Controller{
    /**
     * @Route("/partment", name="partmentindex", methods={"GET"})
     */
    public function indexAction(){
        return $this->render('partment/index.html.twig');
    }

    /**
     * @Route("/partment/add",name="partmentadd")
     */
    public function addAction(){
    	return $this->render("partment/add.html.twig");
    }
}