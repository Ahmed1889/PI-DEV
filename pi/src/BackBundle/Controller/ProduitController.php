<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Categorie;
use BackBundle\Entity\Produit;
use BackBundle\Form\ProduitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
    public function AjoutAction(Request $request)
    {

        $produit = new Produit();
        $form= $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            /** @var UploadedFile $file */
            $file = $produit->getImage();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $produit->setImage($filename);

            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("afficher_produit");

        }
        return $this->render('@Back/Produit/ajouter_produit.html.twig', array(
            "form"=> $form->createView()
        ));
    }
    public function AfficheAction()
    {

        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->findAll();
        return $this->render('@Back/Produit/affiche_produit.html.twig', array(
            "produit" =>$produit
        ));

    }
    public function SupprimerAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Produit::class)->find($id);
        $em->remove($categorie);
        $em->flush();

        return $this->redirectToRoute('afficher_produit');
    }
    public function ModifierAction(Request $request)
    {
        $id = $request->get('id');
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $form = $this->createFormBuilder($produit)
            ->add('libelleP')
            ->add('description' , TextareaType::class)
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'libelleC',])
            ->add('prixAchat')
            ->add('prixVente')
            ->add('image',FileType::class, array('data_class'=>null, 'required'=>false))
            ->add('modifier', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            /** @var UploadedFile $file */
            $file = $produit->getImage();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $produit->setImage($filename);
            $em->flush();
            return $this->redirectToRoute('afficher_produit');
        }
        return $this->render('@Back/produit/modifier_produit.html.twig', array(
            'form' => $form->createView()
        ));


    }
}
