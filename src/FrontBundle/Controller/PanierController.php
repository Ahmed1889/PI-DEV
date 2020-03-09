<?php

namespace FrontBundle\Controller;

use BackBundle\BackBundle;
use BackBundle\Entity\Categorie;
use BackBundle\Entity\Commande;
use FrontBundle\Entity\Panier;
use BackBundle\Entity\Produit;
use BackBundle\Entity\BonReduction;
use FrontBundle\FrontBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Form\PanierType;
use AppBundle\Entity\User;
use function Sodium\add;
use Yamilovs\Bundle\SmsBundle\Service\ProviderManager;
use Yamilovs\Bundle\SmsBundle\Sms\Sms;
use \Twilio\Rest\Client;

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

        $session->set('panier',$panier);

        return $this->redirectToRoute("afficher_produitF",array('session'=>$panier));
    }

    public function CheckoutAction(Request $request){
        $this->SMSAction();
        $a=$request->get('recupAdresseComplete');
        $l=$request->get('latlng');

        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        if (!$session->has('panier')) $session->set('panier',array());
            else{
                $panierbon= null;
                $bon = null;
                if ($session->has('bon')){
                    $panierbon = $session->get('bon');
                    $bon = new BonReduction();
                    $couponValue = null;
                    $couponId = null;
                    foreach ($panierbon as $key => $value){
                        $couponId= $key;
                        $couponValue= $value;
                    }
                    $bon = $em->getRepository('BackBundle:BonReduction')->find($couponId);
                }
                $panier = $session->get('panier');
        $id_u = $this->container->get('security.token_storage')->getToken()->getUser();
        $commande = new Commande();
        $commande->setIdU($id_u);
        $commande->setAdresse($a);
        $commande->setLatlng($l);
        $tot=0;
        $commande->setDate(new \DateTime('now'));
        if ($bon != null)
            $commande->setIdBon($bon);
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
            $commande->setPrixT($tot);
            $em->persist($commande);
            $em->flush();
            $session->remove('panier');
            $session->remove('bon');
            //$this->sendSms(new ProviderManager());
                if($panierbon == null)
                return $this->render('@Front/Panier/commande.html.twig',array("commande" => $commande , "produits"=>$produits, "total"=>$tot));
                $couponValue = null;
                $couponId = null;
                foreach ($panierbon as $key => $value){
                    $couponId= $key;
                    $couponValue= $value;
                }
                $bonred= new BonReduction();
                $bonred = $em->getRepository('BackBundle:BonReduction')->find($couponId);
                $bonred->setIsvalid(false);
                $em->persist($bonred);
                $em->flush();
                $totalReduit = ($tot/100)*(100-$couponValue);

                return $this->render('@Front/Panier/commande.html.twig',array("commande" => $commande , "produits"=>$produits, "total"=>$tot,"totalReduit"=>$totalReduit, "couponId"=>$couponId, "couponValue"=>$couponValue));

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
            $total = $request->get('total');
            // Set your secret key. Remember to switch to your live secret key in production!
            // See your keys here: https://dashboard.stripe.com/account/apikeys
            \Stripe::setApiKey('sk_test_ZHW0PtSsMjjBwAKjnQeMyh6b00R0cPoncW');
            $id_u = $this->container->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $client = $em->getRepository(User::class)->find($id_u);

            // Token is created using Stripe Checkout or Elements!
            // Get the payment token ID submitted by the form:
            //$token = $_POST['stripeToken'];

            $charge = \Stripe\Charge::create([
                'amount' => $total,
                'currency' => 'eur',
                'description' => 'charge'+ $client->getUsername(),
                'source' => $request->request->get('stripeToken'),
            ]);
            return $this->render('@Front/Produit/AfficheProduitF.html.twig');


        }

        public function verifyCouponAction(Request $request){
            $coupon= $request->get('coupon');
            $em = $this->getDoctrine()->getManager();
            $bon = new BonReduction();
            $bon = $em->getRepository('BackBundle:BonReduction')->findBy(["numero"=>$coupon,"isvalid"=>true]);
            if(!$bon){
                return new JsonResponse(array('success'=>false));
            }else{
                $val = $bon[0]->getTaux();
                $session = $request->getSession();
                if (!$session->has('bon')) $session->set('bon', array());
                $sessionbon = $session->get('bon');
                $sessionbon[$bon[0]->getId()]= $val;
                $session->set('bon',$sessionbon);
                return new JsonResponse(array('success'=>true , 'value'=>$val));
            }

        }
    public function SMSAction()
    {
        $sid = "ACdccb0784bc423b6a055c06a844b2ddfb"; // Your Account SID from www.twilio.com/console
        $token = "318e6bf9d344c722a7968b5b7d19e3e3"; // Your Auth Token from www.twilio.com/console

        $client = new Client($sid, $token);
        $message = $client->messages->create(
            '+21656161414', // Text this number
            array(
                'from' => '+15413786775', // From a valid Twilio number
                'body' => 'Commande Validée '
            )
        );
    }



}
