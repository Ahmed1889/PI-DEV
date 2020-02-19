<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Commande;
use FrontBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use BackBundle\Entity\Categorie;
use BackBundle\Entity\Produit;
use BackBundle\service;
use Symfony\Component\HttpFoundation\RedirectResponse;


class CommandeController extends Controller
{
    public function AfficheCommandeAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $commande=$em->getRepository(Commande::class)->findAll();

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $commande,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',10)

        );

        return $this->render('@Back/Commande/AfficheCommande.html.twig', array(
            "commande" =>$result
        ));

    }
    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository(Commande::class)->find($id);
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute("affichercommande");

    }

    public function showAction(Request $request){
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $commande =  $em->getRepository(Commande::class)->find($id);
        $panier = $em->getRepository(Panier::class)->findBy(["id_c" =>$id]);
        $produits = array();
        $prixT=0;
        foreach ($panier as $item){
            $produit = new Produit();
            $produit = $em->getRepository('BackBundle:Produit')->find($item->getIdP());
            $categorie =new Categorie();
            dump($panier);
            $categorie = $produit->getCategorie();
            $produit->qte = $item->getQuantite();
            $produit->cat = $categorie;
            array_push($produits,$produit);
            $prixT = $prixT + $item->getPrixT();
        }
        return $this->render('@Back/Commande/CommandeDetails.html.twig',array("commande" => $commande , "produits"=>$produits, "total"=>$prixT));



    }

    public function searchMyAssAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('q');
        $commande = $em->getRepository(Commande::class)->findEntitiesByString($id);
        $jsondata=array();
        $idx=0;
        var_dump($commande);
        foreach($commande as $c){
            $temp=array('id'=>$c->getId(),'date'=>$c->getDate(),'idu'=>$c->getIdu(),
            );

            $jsondata[$idx++]=$temp;
        }
        return new JsonResponse($jsondata);

    }

    public function pdfAction(Request $request){
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size', 'A4');
        $snappy->setOption('encoding', 'UTF-8');
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $commande =  $em->getRepository(Commande::class)->find($id);
        $panier = $em->getRepository(Panier::class)->findBy(["id_c" =>$id]);
        $produits = array();
        $prixT=0;
        foreach ($panier as $item){
            $produit = new Produit();
            $produit = $em->getRepository('BackBundle:Produit')->find($item->getIdP());
            $categorie =new Categorie();
            dump($panier);
            $categorie = $produit->getCategorie();
            $produit->qte = $item->getQuantite();
            $produit->cat = $categorie;
            $produit->prixt = $item->getPrixT();
            array_push($produits,$produit);
            $prixT = $prixT + $item->getPrixT();
        }
        $template = $this->renderView('@Back/Commande/pdf.html.twig',["commande" => $commande , "produits"=>$produits, "total"=>$prixT]);

        $filename = $id;

        return new Response(
            $snappy->getOutputFromHtml($template),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

}
