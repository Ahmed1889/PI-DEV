<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Categorie;
use BackBundle\Entity\Fournisseur;
use BackBundle\Entity\Produit;
use BackBundle\Form\ProduitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            $a=$produit->getPrixAchat();
            $produit->setPrixVente($a+($a*0.4));
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("afficher_produit");

        }
        return $this->render('@Back/Produit/ajouter_produit.html.twig', array(
            "form"=> $form->createView()
        ));
    }


    public function AfficheAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackBundle:Produit')->createQueryBuilder('bp');
        if ($request->query->getAlnum('filter')) {
            $queryBuilder
                ->leftJoin('bp.categorie','c')
                ->addSelect('c')
                ->where('c.libelleC like :libelleC')
                ->orWhere('bp.libelleP LIKE :libelleP or bp.id like :id or bp.description like :description or bp.prixAchat like :prixAchat or bp.prixVente like :prixVente or bp.nbrVues like :nbrVues')
                ->setParameter('libelleP', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('id', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('description', '%' . $request->query->getAlnum('filter') . '%')
            ->setParameter('prixAchat', '%' . $request->query->getAlnum('filter') . '%')
            ->setParameter('prixVente', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('nbrVues', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('libelleC', '%' . $request->query->getAlnum('filter') . '%');
        }
        $query = $queryBuilder->getQuery();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            5
        );
        return $this->render('@Back/Produit/affiche_produit.html.twig', array(
            'produit' =>$result
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
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'nomf',])
            ->add('prixAchat')
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
            $a=$produit->getPrixAchat();
            $produit->setPrixVente($a+($a*0.4));
            $em->flush();
            return $this->redirectToRoute('afficher_produit');
        }
        return $this->render('@Back/produit/modifier_produit.html.twig', array(
            'form' => $form->createView()
        ));


    }
}
