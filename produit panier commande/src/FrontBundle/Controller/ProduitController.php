<?php

namespace FrontBundle\Controller;

use BackBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
    public function AfficheFAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->findAll();
        return $this->render('@Front/Produit/affiche_produitF.html.twig', array(
                "produit" =>$produit,
                "panier"=>$request->getSession()->get('panier')
        ));

    }
    public function DetailsAction(Request $request)
    {
        $id = $request->get('id');
        $em= $this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->find($id);
        return $this->render('@Front/Produit/details_produitF.html.twig', array(
            'libelleP'=>$produit->getLibelleP(),
            'categorie'=>$produit->getCategorie(),
            'prixVente'=>$produit->getPrixVente(),
            'descripion'=>$produit->getDescription(),
            'image'=>$produit->getImage(),
            'id'=>$produit->getId()
        ));
    }
}
