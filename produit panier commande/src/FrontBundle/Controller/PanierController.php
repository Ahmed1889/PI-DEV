<?php

namespace FrontBundle\Controller;

use BackBundle\BackBundle;
use BackBundle\Entity\Categorie;
use BackBundle\Entity\Commande;
use FrontBundle\Entity\Panier;
use BackBundle\Entity\Produit;
use FrontBundle\FrontBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Form\PanierType;
use AppBundle\Entity\User;
use function Sodium\add;
use Yamilovs\Bundle\SmsBundle\Service\ProviderManager;
use Yamilovs\Bundle\SmsBundle\Sms\Sms;

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
        $tot=0;
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
                $tot=$tot+$produit->getPrixVente()*$value;
            }
            $session->remove('panier');
            //$this->sendSms(new ProviderManager());
                return $this->render('@Front/Panier/commande.html.twig',array("commande" => $commande , "produits"=>$produits, "total"=>$tot));

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
        $id = $request->get('idd');
        $calledfrom = $request->get('calledfromcart');
        $session = $request->getSession();
        $panier = $session->get('panier');
        $em = $this->getDoctrine()->getManager();
        //$produit = $em->getRepository('BackBundle:Produit')->findb($id);

        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }
        if($calledfrom)
        return $this->redirect($this->generateUrl('cart'));
        $produit=$em->getRepository(Produit::class)->findAll();
        return $this->render('@Front/Produit/affiche_produitF.html.twig', array(
            "produit" =>$produit,
            "panier"=>$request->getSession()->get('panier')
        ));
    }
    public function IncrimentQteAction(Request $request)
    {
        $id = $request->get('idd');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('BackBundle:Produit')->find($id);
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($produit->getLibelleP(), $panier)) {
            $panier[$produit->getLibelleP()] = $panier[$produit->getLibelleP()] + 1;

        }
        $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        $session->set('panier',$panier);

        return $this->redirectToRoute("cart",array('session'=>$panier));
    }

    public function DecrimentQteAction(Request $request)
    {
        $id = $request->get('idd');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('BackBundle:Produit')->find($id);
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($produit->getLibelleP(), $panier)) {
            if($panier[$produit->getLibelleP()]!= 1)
            $panier[$produit->getLibelleP()] = $panier[$produit->getLibelleP()] - 1;

        }
        $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        $session->set('panier',$panier);
        return $this->redirectToRoute("cart",array('session'=>$panier));
    }

    //public function sendSms(ProviderManager $providerManager){
        //$sms = new Sms('+21650613453', 'The cake is a lie');
        //$provider = $providerManager->getProvider('message_bird');

        //$provider->send($sms);

        public function PaimentAction(Request $request){

            return $this->render('@Front/Panier/payment.html.twig');


        }
        public function PayerAction(Request $request){
            // Set your secret key. Remember to switch to your live secret key in production!
            // See your keys here: https://dashboard.stripe.com/account/apikeys
            \Stripe\Stripe::setApiKey('sk_test_OyNXKfqvWhsZQ9mzp5C6xjij00Kve7G8WZ');

            // Token is created using Stripe Checkout or Elements!
            // Get the payment token ID submitted by the form:
            //$token = $_POST['stripeToken'];
            $charge = \Stripe\Charge::create([
                'amount' => 1000,
                'currency' => 'eur',
                'description' => 'Example charge',
                'source' => $request->request->get('stripeToken'),
            ]);
            return $this->render('@Front/Produit/AfficheProduitF.html.twig');


        }

}
