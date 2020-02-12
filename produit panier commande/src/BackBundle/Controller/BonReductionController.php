<?php

namespace BackBundle\Controller;

use BackBundle\Entity\BonReduction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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
    public function deleteAction(Request $request, BonReduction $bonReduction)
    {
        $form = $this->createDeleteForm($bonReduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bonReduction);
            $em->flush();
        }

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
}
