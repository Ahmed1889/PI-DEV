<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class secureController extends Controller
{
    /**
     * @Route("/")
     */
    public function RedirectAction(Request $request)
    {
        $autochecker=$this->container->get('security.authorization_checker');
        if($autochecker->isGranted('ROLE_EMPLOYE'))
        {
            return $this->render('@Back/Default/afficherEmployer.html.twig');
        }
        elseif ($autochecker->isGranted('ROLE_ADMIN') || $autochecker->isGranted('ROLE_LIVREUR'))
        {
            return $this->forward('BackBundle:conge:notifier');
        }
        else
        {
            $em=$this->getDoctrine()->getManager();
            $produit=$em->getRepository(Produit::class)->findAll();
            return $this->render('Default/index.html.twig',array(
            "produit" =>$produit,"panier"=>$request->getSession()->get('panier')
        ));
        }
    }
}
