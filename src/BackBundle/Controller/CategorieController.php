<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Categorie;
use BackBundle\Entity\Produit;
use BackBundle\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    public function AjoutAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        $form1 = $form->createView();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("afficher_categorie");
        }
        return $this->render('@Back/produit/ajout_categorie.html.twig', array('form' => $form->createView()));

    }
    public function AfficheAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackBundle:Categorie')->createQueryBuilder('bp');
        if ($request->query->getAlnum('filter')) {
            $queryBuilder
                ->leftJoin('bp.produit','x')
                ->addSelect('x')
                ->where('x.nbrVues like :nbrVues')
                ->orWhere('bp.libelleC LIKE :libelleC or bp.id like :id')
                ->setParameter('libelleC', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('id', '%' . $request->query->getAlnum('filter') . '%')
            ->setParameter('nbrVues', '%' . $request->query->getAlnum('filter') . '%');
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

        return $this->render('@Back/produit/affiche_categorie.html.twig', array('categories' => $result));
    }
    public function SupprimerAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Categorie::class)->find($id);
        $em->remove($categorie);
        $em->flush();

        return $this->redirectToRoute('afficher_categorie');
    }
    public function ModifierAction(Request $request)
    {
        $id = $request->get('id');
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $form = $this->createFormBuilder($categorie)
            ->add('libelleC')
            ->add('modifier', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficher_categorie');
        }
        return $this->render('@Back/produit/modifier_categorie.html.twig', array(
            'form' => $form->createView()
        ));


    }



}
