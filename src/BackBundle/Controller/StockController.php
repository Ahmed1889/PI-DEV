<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Depot;
use BackBundle\Entity\Produit;
use BackBundle\Entity\Stock;
use BackBundle\Form\StockType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class StockController extends Controller
{
    public function AjoutAction(Request $request)
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);
        $form1 = $form->createView();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stock);
            $em->flush();
            return $this->redirectToRoute("afficher_stock");
        }
        return $this->render('@Back/produit/ajout_stock.html.twig', array('form' => $form->createView()));

    }
    public function AfficheAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackBundle:Stock')->createQueryBuilder('bp');
        if ($request->query->getAlnum('filter')) {
            $queryBuilder
                ->leftJoin('bp.produit','p')
                ->where('p.libelleP like :libelleP')
                ->orWhere('bp.quantite LIKE :quantite or bp.id like :id or bp.seuil like :seuil')
                ->setParameter('quantite', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('id', '%' . $request->query->getAlnum('filter') . '%')
                ->setParameter('seuil', '%' . $request->query->getAlnum('filter') . '%')
            ->setParameter('libelleP', '%' . $request->query->getAlnum('filter') . '%');
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

        return $this->render('@Back/Produit/affiche_stock.html.twig', array('stock' => $result));
    }
    public function SupprimerAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository(Stock::class)->find($id);
        $em->remove($stock);
        $em->flush();

        return $this->redirectToRoute('afficher_stock');
    }
    public function Supprimer2Action(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository(Stock::class)->find($id);
        $stock->setQuantite($stock->getQuantite()-1);
        $em->flush();

        return $this->redirectToRoute('afficher_stock');
    }
    public function ModifierAction(Request $request)
    {
        $id = $request->get('id');
        $stock = $this->getDoctrine()->getRepository(Stock::class)->find($id);
        $form = $this->createFormBuilder($stock)
            ->add('produit', EntityType::class, [
                'class' => Produit::class,
                'choice_label' => 'libelleP',])
            ->add('quantite')
            ->add('seuil')
            ->add('depot', EntityType::class, [
                'class' => Depot::class,
                'choice_label' => 'nom',])
            ->add('modifier', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficher_stock');
        }
        return $this->render('@Back/produit/modifier_stock.html.twig', array(
            'form' => $form->createView()
        ));


    }
}
