<?php

namespace FrontBundle\Controller;

use BackBundle\Entity\Categorie;
use BackBundle\Entity\DislikeProduit;
use BackBundle\Entity\LikeProduit;
use BackBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
    public function AfficheFAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->findAll();
        $produits=sizeof($produit);
        $cats=$em->getRepository(Categorie::class)->findAll();
        $catss=sizeof($cats);
        $user = $this->getUser();
        $like=$em->getRepository(LikeProduit::class)->findAll();
        $dislike=$em->getRepository(DislikeProduit::class)->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $produit,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('@Front/Produit/affiche_produitF.html.twig', array(
            "cats"=>$cats,
            "catss"=>$catss,
            'produit' => $result,
            "produits"=>$produits,
            "like"=>$like,
            "dislike" =>$dislike,
            "user" => $user,
            "panier"=>$request->getSession()->get('panier')
        ));

    }
    public function DetailsAction(Request $request)
    {
        $id = $request->get('id');
        $em= $this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->find($id);
        $produit->setNbrVues($produit->getNbrVues() + 1);
        $em->flush();
        return $this->render('@Front/Produit/details_produitF.html.twig', array(
            'libelleP'=>$produit->getLibelleP(),
            'categorie'=>$produit->getCategorie(),
            'prixVente'=>$produit->getPrixVente(),
            'descripion'=>$produit->getDescription(),
            'image'=>$produit->getImage(),
            'nbrVues'=>$produit->getNbrVues(),
            'id'=>$produit->getId()
        ));
    }
    public function likeAction($id)
    {
        $like = new LikeProduit();
        $user = $this->getUser()->getId();
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $produit->setLikeCount($produit->getLikeCount() + 1);
        if ($produit->getDislikeCount() != 0) {
            $produit->setDislikeCount($produit->getDislikeCount() - 1);
        }

        $like->setProduit($produit);
        $like->setUserId($user);

        $em = $this->getDoctrine()->getManager();
        $em->persist($like);
        $em->flush();

        $dislike = $this->getDoctrine()->getRepository(DislikeProduit::class)->findvote($user, $produit);
        return $this->redirectToRoute('afficher_produitF');
    }
    public function dislikeAction($id)
    {
        $dislike = new DislikeProduit();
        $user = $this->getUser()->getId();
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $produit->setDislikeCount($produit->getDislikeCount() + 1);
        if ($produit->getLikeCount() != 0) {
            $produit->setLikeCount($produit->getLikeCount() - 1);
        }
        $dislike->setProduit($produit);
        $dislike->setUserId($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($dislike);
        $em->flush();

        $like = $this->getDoctrine()->getRepository(LikeProduit::class)->findvote($user, $produit);


        return $this->redirectToRoute('afficher_produitF');

    }
    public function RatingAction(Request $request)
    {


        $nbrating=intval($request->request->get('rating'));

        $id = $request->get('event');
        $product = $this->getDoctrine()
            ->getRepository('BackBundle:Produit')
            ->find($id);

        $product->setRating($product->getRating()+$nbrating);

        $m=$this->getDoctrine()->getManager();
        $m->persist($product);
        $m->flush();
        return new JsonResponse();







    }
}
