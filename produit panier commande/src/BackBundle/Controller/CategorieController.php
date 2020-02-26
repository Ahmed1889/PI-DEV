<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Categorie;
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
    public function AfficheAction()
    {
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

        return $this->render('@Back/Produit/affiche_categorie.html.twig', array('categories' => $categorie));
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
