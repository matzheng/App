<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\AzTopic;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class SearchController extends Controller{
    /**
     * @Route("/search", name="searchresultpage", methods={"GET"})
     */
    public function searchResultAction(){
        $keyword = $_GET['keyword'];
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            "select p from AppBundle:AzTopic p where (p.title like :keyword or p.detail like :keyword) and p.qtypes='1' order by p.tid"
        )->setParameter("keyword", "%".$keyword."%");
        return $this->render('search/index.html.twig', array('keyword'=>$keyword, 'result'=>$query->getResult()));
    }
}