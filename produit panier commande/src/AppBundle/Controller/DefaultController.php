<?php

namespace AppBundle\Controller;

use BackBundle\Entity\Produit;
use FrontBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/front", name="f")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $panier = new Panier();
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->findAll();

        return $this->render('default/index.html.twig', array(
            "produit" =>$produit,"panier"=>$request->getSession()->get('panier')
        ));
    }


    /**
     * @Route("/back", name="homepage")
     */
    public function indexbackAction(Request $request)
    {
        // replace this example code with whatever you need
       // die("aa");
        return $this->render('baseBack.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
