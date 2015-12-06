<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\AzAnswer;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class AnswerController extends Controller{
    /**
     * @Route("/answer", name="answerpost", methods={"POST"})
     */
    public function answerPostAction(){
        $mid = $_POST['mid'];
        $tid = $_POST['tid'];
        $answer = $_POST['answer'];

        if(!$tid || !$mid || !$answer){
            return new JsonResponse(array('success'=>'0', 'msg'=>'数据异常'));
        }

        $a = new AzAnswer();
        $a->setAid(time());
        $a->setAnswer($answer);
        $a->setMid($mid);
        $a->setTid($tid);

        $em = $this->getDoctrine()->getManager();
        $em->persist($a);
        $em->flush();

        return new JsonResponse(array('success'=>'1', 'msg'=>'回答成功', 'data'=>$a->getTid()));
    }
}