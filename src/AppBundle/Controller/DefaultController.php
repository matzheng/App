<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\DedeMember;
use AppBundle\Entity\DedeMemberPerson;
use AppBundle\Entity\AzTopic;

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
        $em = $this->getDoctrine()->getManager();
        $sql = "select a.tid,a.title, a.detail,a.mid,a.qtypes,ifnull(b.uname,'') as uname,b.face,ifnull(b.product,'') product,ifnull(e.fid,0) as myfav,ifnull(c.favs,0) as favs from az_topic  a left join dede_member b on a.mid=b.mid left join (select tid, count(fid) as favs from az_member_fav group by tid) c on a.tid=c.tid left join (select fid,tid from az_member_fav where mid=".$ck.") e on a.tid=e.tid order by a.tid desc";
        $q = $em->getConnection()->prepare($sql);
        $q->execute();

        return $this->render('default/index.html.twig',array('result' =>$q->fetchAll(), 'mid'=>$ck));
    }
}
