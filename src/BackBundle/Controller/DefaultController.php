<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function robotAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $libelle = $request->get('q');
        $fa=$this->getDoctrine()->getManager()->getRepository('BackBundle:question')->findOneBy(array('question'=> $libelle));



            $rec = $em->getRepository('BackBundle:reponse')->robot($fa->getId());


            if (!$rec) {
                $result['question']['error'] = "J'ai pas compris votre question veuillez préciser s'il vous plait 😞 ";
            } else {
                $result['question'] = $this->getRealEntities($rec);
            }

        return new Response(json_encode($result));

    }
    public function getRealEntities($rec)
    {
        foreach ($rec as $rec) {
            $realEntities[$rec->getId()] = [$rec->getReponse()];

        }
        return $realEntities;
    }
    public function affAction()
    {
       return $this->render('@Back/Default/robot.html.twig' );
    }
}
