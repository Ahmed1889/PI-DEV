<?php

namespace BackBundle\Controller;

use AppBundle\Entity\User;
use BackBundle\Entity\BonReduction;
use BackBundle\Entity\Categorie;
use BackBundle\Entity\Commande;
use BackBundle\Entity\Produit;
use FrontBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Bonreduction controller.
 *
 * @Route("bonreduction")
 */
class BonReductionController extends Controller
{
    /**
     * Lists all bonReduction entities.
     *
     * @Route("/", name="bonreduction_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bonReductions = $em->getRepository('BackBundle:BonReduction')->findAll();

        return $this->render('bonreduction/index.html.twig', array(
            'bonReductions' => $bonReductions,
        ));
    }

    /**
     * Creates a new bonReduction entity.
     *
     * @Route("/new", name="bonreduction_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bonReduction = new Bonreduction();
        $form = $this->createForm('BackBundle\Form\BonReductionType', $bonReduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bonReduction);
            $em->flush();

            return $this->redirectToRoute('bonreduction_show', array('id' => $bonReduction->getId()));
        }

        return $this->render('bonreduction/new.html.twig', array(
            'bonReduction' => $bonReduction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bonReduction entity.
     *
     * @Route("/{id}", name="bonreduction_show")
     * @Method("GET")
     */
    public function showAction(BonReduction $bonReduction)
    {
        $deleteForm = $this->createDeleteForm($bonReduction);

        return $this->render('bonreduction/show.html.twig', array(
            'bonReduction' => $bonReduction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bonReduction entity.
     *
     * @Route("/{id}/edit", name="bonreduction_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, BonReduction $bonReduction)
    {
        $deleteForm = $this->createDeleteForm($bonReduction);
        $editForm = $this->createForm('BackBundle\Form\BonReductionType', $bonReduction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bonreduction_edit', array('id' => $bonReduction->getId()));
        }

        return $this->render('bonreduction/edit.html.twig', array(
            'bonReduction' => $bonReduction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bonReduction entity.
     *
     * @Route("/{id}", name="bonreduction_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {


        $em = $this->getDoctrine()->getManager();
        $bon=$em->getRepository(BonReduction::class)->find($id);
        $em->remove($bon);
        $em->flush();

        return $this->redirectToRoute('bonreduction_index');
    }

    /**
     * Creates a form to delete a bonReduction entity.
     *
     * @param BonReduction $bonReduction The bonReduction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(BonReduction $bonReduction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bonreduction_delete', array('id' => $bonReduction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function pdf2Action(Request $request){
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size', 'A6');
        $snappy->setOption('encoding', 'UTF-8');


            $template = $this->renderView('bonreduction/pdf2.html.twig');

        $filename = 'BON_RED';

        return new Response(
            $snappy->getOutputFromHtml($template),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }
}
