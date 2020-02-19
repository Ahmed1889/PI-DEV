<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Employe;
use BackBundle\Entity\Livraison_Planning;
use BackBundle\Entity\TypeVehicule;
use BackBundle\Entity\Vehicule;
use BackBundle\Form\TypeVehiculeType;
use BackBundle\Form\VehiculeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

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
        $planning=$this->getDoctrine()->getRepository(Livraison_Planning::class)->findByEmploye($employe);

        return $this->render('@Back/Livraison/AfficherPlanningDay.html.twig',array('plannigs'=>$planning));
    }
}
