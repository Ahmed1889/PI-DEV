<?php

namespace BackBundle\Controller;

use AppBundle\Entity\User;
use BackBundle\Entity\Commande;
use BackBundle\Entity\Employe;
use BackBundle\Entity\Livraison_Planning;
use BackBundle\Entity\TypeVehicule;
use BackBundle\Entity\Vehicule;
use BackBundle\Form\TypeVehiculeType;
use BackBundle\Form\VehiculeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

class LivraisonController extends Controller
{
    public function AjouterTypeVehiculeAction(Request $request)
    {
        $typeVehicule=new  TypeVehicule();
        $form=$this->createForm(TypeVehiculeType::class,$typeVehicule);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($typeVehicule);
            $em->flush();
            return $this->redirectToRoute('afficherTypeVehicules');
        }
        return $this->render('@Back/Livraison/AjoutTypeVehicule.html.twig',array('form'=>$form->createView()));
    }

    public  function AfficherTypeVehiculeAction(){
        $typeVehicules=$this->getDoctrine()->getRepository(TypeVehicule::class)->findAll();

        return $this->render('@Back/Livraison/AfficherTypeVehicules.html.twig',array('typesV'=>$typeVehicules));
    }

    public  function SupprimerTypeVehiculeAction(Request $request)
    {
        $id = $request->get('id');
        $typeV = $this->getDoctrine()->getRepository(TypeVehicule::class)->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($typeV);
        $em->flush();
        return $this->redirectToRoute('afficherTypeVehicules');

    }

    public function ModifierTypeVehiculeAction(Request $request)
    {
        $id = $request->get('id');
        $typeV = $this->getDoctrine()->getRepository(TypeVehicule::class)->find($id);
        $form = $this->createFormBuilder($typeV)
            ->add('libelle')
            ->add('modifier', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherTypeVehicules');
        }
        return $this->render('@Back/Livraison/ModifTypeVehicule.html.twig', array(
            'form' => $form->createView()
        ));

    }

    //Gestion vehicules
    public function AjouterVehiculeAction(Request $request)
    {
        $vehicule=new  Vehicule();
        $form=$this->createForm(VehiculeType::class,$vehicule);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($vehicule);
            $em->flush();
            return $this->redirectToRoute('afficheVehicule');
        }
        return $this->render('@Back/Livraison/AjouterVehicule.html.twig',array('form'=>$form->createView()));
    }

    public  function AfficherVehiculeAction(){
        $vehicule=$this->getDoctrine()->getRepository(Vehicule::class)->findAll();

        return $this->render('@Back/Livraison/AfficherVehicules.html.twig',array('vehicules'=>$vehicule));
    }

    public  function SupprimerVehiculeAction(Request $request)
    {
        $id = $request->get('id');
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($vehicule);
        $em->flush();
        return $this->redirectToRoute('afficheVehicule');

    }

    public function ModifierVehiculeAction(Request $request)
    {
        $id = $request->get('id');
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find($id);
        $form = $this->createFormBuilder($vehicule)
            ->add('nom')
            ->add('typeVehicule', EntityType::class, [
                'class' => TypeVehicule::class,
                'choice_label' => 'libelle',])
            ->add('modifier',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('afficheVehicule');

        }
        return $this->render('@Back/Livraison/ModifVehicule.html.twig', array(
            'form' => $form->createView()
        ));

    }

    //Livreur

    public  function AfficherVPlanningDayAction(){
        $user = $this->getUser();
        $employe=$this->getDoctrine()->getRepository(Employe::class)->findOneByUser($user);
        $planning=$this->getDoctrine()->getRepository(Livraison_Planning::class)->findByEmploye($user);

        return $this->render('@Back/Livraison/AfficherPlanningDay.html.twig',array('plannigs'=>$planning));
    }

    public  function AfficherCommandeNonLivreAction(){

        $cmd=$this->getDoctrine()->getManager()->createQuery("select c from BackBundle:Commande c where c.etatLivraion='non affecté' or c.etatLivraion='affecté' ")->getResult();



        return $this->render('@Back/Livraison/AfficheCommandeNonLivre.html.twig',array('cmd'=>$cmd));
    }

    public  function AffecterLivraisonAction(Request $request){

        $id = $request->get('id');
        $cmd=$this->getDoctrine()->getManager()->createQuery("select c from BackBundle:Commande c where c.id=". $id )->getResult();




        return $this->render('@Back/Livraison/AffecterLivraison.html.twig',array('cmd'=>$cmd[0]));
    }

    public  function AfficherLivreurDispoAction(Request $request)
    {

       $dateL = $request->get('dateL');
//$dateL='2020-02-09 16:00:00';
        $timestamp = strtotime($dateL);
        $t=date("Y-m-d H:i:s", $timestamp);

        $livraison2=$this->getDoctrine()->getManager()->createQuery("select c from BackBundle:Livraison_Planning c  where  c.dateLivraison = '". $t."'")->getResult();

        $str="";
        foreach ($livraison2 as $item) {
            $str .= $item->getEmploye()->getId() . ",";

        }
        $str =rtrim($str,',');
        if($str!='')
        $livraison=$this->getDoctrine()->getManager()->createQuery("select u from AppBundle:User u where u.roles like '%Livr%' and  u.id not in (".$str.") "  )->getResult();
        else
    $livraison=$this->getDoctrine()->getManager()->createQuery("select u from AppBundle:User u where u.roles like '%Livr%' "  )->getResult();


        $jsonData=array();
        $idx=0;
        foreach ($livraison as $liv) {
            $temp=array(
                'id'=>$liv->getId(),
                'named'=>$liv->getUsername(),
                'adresse'=>$liv->getAdresseC(),
                        );
            $jsonData[$idx++]=$temp;

        }

        return new JsonResponse($jsonData);

    }


    public  function AfficherVehiculeDispoAction(Request $request)
    {

        $dateL = $request->get('dateL');
//$dateL='2020-02-09 16:00:00';
        $timestamp = strtotime($dateL);
        $t=date("Y-m-d H:i:s", $timestamp);

        $livraison2=$this->getDoctrine()->getManager()->createQuery("select c from BackBundle:Livraison_Planning c  where  c.dateLivraison = '". $t."'")->getResult();

        $str="";
        foreach ($livraison2 as $item) {
            $str .= $item->getVehicule()->getId() . ",";

        }
        $str =rtrim($str,',');
        if($str!='')
            $vehicules=$this->getDoctrine()->getManager()->createQuery("select u from BackBundle:Vehicule u where  u.id not in (".$str.") "  )->getResult();
        else
            $vehicules=$this->getDoctrine()->getManager()->createQuery("select u from BackBundle:Vehicule u   "  )->getResult();


        //die("aa");
        $jsonData=array();
        $idx=0;
        foreach ($vehicules as $liv) {
            $temp=array(
                'id'=>$liv->getId(),
                'named'=>$liv->getNom(),

            );
            $jsonData[$idx++]=$temp;

        }

        return new JsonResponse($jsonData);

    }

    public  function AffecterCommandeAction(Request $request){

        $cmd = $request->get('cmd');
        $idl= $request->get('idl');
        $idv = $request->get('idv');
        $dat= $request->get('dat');
        $timestamp = strtotime($dat);
        $tr=date("Y-m-d H:i:s", $timestamp);

        $t=new \DateTime($tr);

        $em=$this->getDoctrine()->getManager();
        $livplanning=new Livraison_Planning();
        $livplanning->setCommande($em->getRepository(Commande::class)->find($cmd));
        $livplanning->setDateLivraison($t);
        $livplanning->setEmploye($em->getRepository(User::class)->find($idl));
        $livplanning->setStatut(false);
        $livplanning->setVehicule($em->getRepository(Vehicule::class)->find($idv));

    $commande=$em->getRepository(Commande::class)->find($cmd);
    $commande->setEtatLivraion("affecté");

        $em->persist($livplanning);
        $em->flush();
        return $this->redirectToRoute('afficherCommandeNonLivre');
    }


    public  function LivrerCommandeAction(Request $request){

        $id = $request->get('id');



        $em=$this->getDoctrine()->getManager();
        //$livplanning=new Livraison_Planning();
        $livplanning=$em->getRepository(Livraison_Planning::class)->find($id);
        $livplanning->setStatut(true);

        $commande=$em->getRepository(Commande::class)->find($livplanning->getCommande()->getId());
        $commande->setEtatLivraion("livré");


        $em->flush();
        return $this->redirectToRoute('affichePlannigDay');
    }


    public  function ModifierVehicule2Action(Request $request){

        $id = $request->get('id');



        $em=$this->getDoctrine()->getManager();
        //$livplanning=new Livraison_Planning();
        $vehicule=$em->getRepository(Vehicule::class)->find($id);


        $Typvehicule=$em->getRepository(TypeVehicule::class)->findAll();



        $jsonData=array();
        $idx=1;

            $temp=array(
                'id'=>$vehicule->getId(),
                'named'=>$vehicule->getNom(),
                'typeVId'=>$vehicule->getTypeVehicule()->getId(),
                'typeVL'=>$vehicule->getTypeVehicule()->getLibelle(),

            );
            $jsonData[$idx]=$temp;



        return new JsonResponse($jsonData);

    }

    public  function ModifierVehicule22Action(Request $request){

        $id = $request->get('id');
        $em=$this->getDoctrine()->getManager();

        $Typvehicule=$em->getRepository(TypeVehicule::class)->findAll();



        $jsonData=array();
        $idx=0;
        foreach ($Typvehicule as $liv) {

            if($liv->getId()!=$id) {
                $temp = array(
                    'id' => $liv->getId(),
                    'libelle' => $liv->getLibelle(),

                );
                $jsonData[$idx++] = $temp;
            }
        }

        return new JsonResponse($jsonData);

    }


    public  function ModifierVehiculePopAction(Request $request){

        $id = $request->get('idd');
        $nom= $request->get('nomm');
        $veh = $request->get('selct');

        $em=$this->getDoctrine()->getManager();
        $Vehicule=$em->getRepository(Vehicule::class)->find($id);
        $Vehicule->setNom($nom);
        $Vehicule->setTypeVehicule($em->getRepository(TypeVehicule::class)->find($veh));


        $em->flush();
        return $this->redirectToRoute('afficheVehicule');
    }


}
