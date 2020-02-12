<?php

namespace FrontBundle\Controller;

use BackBundle\BackBundle;
use BackBundle\Entity\Categorie;
use BackBundle\Entity\Commande;
use FrontBundle\Entity\Panier;
use BackBundle\Entity\Produit;
use FrontBundle\FrontBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Form\PanierType;
use AppBundle\Entity\User;
use function Sodium\add;

class PanierController extends Controller
{

    public function AjouterproduitaupanierAction(Request $request)
    {
        $id = $request->get('idd');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('BackBundle:Produit')->find($id);
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($produit->getLibelleP(), $panier)) {
            $panier[$produit->getLibelleP()] = $panier[$produit->getLibelleP()] + 1;

        } else {
            $panier[$produit->getLibelleP()] = 1;
        }
        $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        $session->set('panier',$panier);

        return $this->redirectToRoute("afficher_produitF",array('session'=>$panier));
    }

    public function CheckoutAction(Request $request){
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
            else{
                $panier = $session->get('panier');
        $id_u = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $commande = new Commande();
        $commande->setIdU($id_u);
        $commande->setDate(new \DateTime('now'));
        $em->persist($commande);
        $em->flush();
                $produits = array();
            foreach ($panier as $key => $value){
                $produit =new Produit();
                $produit = $em->getRepository('BackBundle:Produit')->findBy(["libelleP"=>$key])[0];
                $panier = new Panier();
                $panier->setIdP($produit);
                $panier->setPrixT($produit->getPrixVente()*$value);
                $panier->setQuantite($value);
                $panier->setIdC($commande);
                $em->persist($panier);
                $em->flush();
                array_push($produits,$produit);
            }
            $session->remove('panier');
                return $this->render('@Front/Panier/commande.html.twig',array("commande" => $commande , "produits"=>$produits));

    }}

    public function ShowCartAction(Request $request)
    {

        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        else {
            $panier = $session->get('panier');
            $id_u = $this->container->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $produits = array();
            $prixT=0;
            $produita = array();
            foreach ($panier as $key => $value) {
                $produit = new Produit();
                $produit = $em->getRepository('BackBundle:Produit')->findBy(["libelleP"=>$key]);
                $categorie =new Categorie();
                dump($panier);
                $categorie = $produit[0]->getCategorie();
                $produit[0]->qte = $value;
                $produit[0]->cat = $categorie;
                array_push($produits,$produit[0]);
                $prixT = $prixT + ($produit[0]->getPrixVente() * $value);
            }
            dump($panier);
            return $this->render('@Front/Panier/cart.html.twig', array(
                "produits" => $produits, "total"=>$prixT,"produit" =>$produita,"panier"=>$panier

            ));

        }
    }
    public function ProduitUpdateAction(Request $request)
    {
        $id = $request->get('idd');
        $qte = $request->get('qte');

        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            $panier[$id] = $qte;

        } else {
            $panier[$id] = 1;
        }
        $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        //return($_SESSION);
        $session->set('panier',$panier);

        return $this->redirectToRoute("cart");}

    public function supprimerAction(Request $request)
    {
        $id = $request->get('id');
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('cart'));
    }


}
