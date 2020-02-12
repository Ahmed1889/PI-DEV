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
    public function AfficheAction()
    {
        $stock = $this->getDoctrine()->getRepository(Stock::class)->findAll();

        return $this->render('@Back/Produit/affiche_stock.html.twig', array('stock' => $stock));
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
