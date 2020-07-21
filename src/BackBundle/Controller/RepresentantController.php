<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Representant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Representant controller.
 *
 */
class RepresentantController extends Controller
{
    /**
     * Lists all representant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $representants = $em->getRepository('BackBundle:Representant')->findAllDesc();

        return $this->render('representant/index.html.twig', array(
            'representants' => $representants,
        ));
    }

    /**
     * Creates a new representant entity.
     *
     */
    public function newAction(Request $request)
    {
        $representant = new Representant();
        $form = $this->createForm('BackBundle\Form\RepresentantType', $representant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($representant);
            $em->flush();

            return $this->redirectToRoute('representant_index');
           // return $this->redirectToRoute('representant_show', array('id' => $representant->getId()));
        }

        return $this->render('representant/new.html.twig', array(
            'representant' => $representant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a representant entity.
     *
     */
    public function showAction(Representant $representant)
    {
        $deleteForm = $this->createDeleteForm($representant);

        return $this->render('representant/show.html.twig', array(
            'representant' => $representant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing representant entity.
     *
     */
    public function editAction(Request $request, Representant $representant)
    {
        $deleteForm = $this->createDeleteForm($representant);
        $editForm = $this->createForm('BackBundle\Form\RepresentantType', $representant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('representant_edit', array('id' => $representant->getId()));
        }

        return $this->render('representant/edit.html.twig', array(
            'representant' => $representant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a representant entity.
     *
     */
    public function deleteAction(Request $request, Representant $representant)
    {
        $form = $this->createDeleteForm($representant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($representant);
            $em->flush();
        }

        return $this->redirectToRoute('representant_index');
    }

    /**
     * Creates a form to delete a representant entity.
     *
     * @param Representant $representant The representant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Representant $representant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('representant_delete', array('id' => $representant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Recherche representant entities.
     *
     */
    public function FilterAction(Request $request)
    {

        $nom = $request->get('nom');
        $em = $this->getDoctrine()->getManager();

        $representants = $em->getRepository('BackBundle:Representant')->findName($nom);

        $jsondata = array();
        $idx = 0;
        foreach ($representants as $f) {
            $temp = array('id'=>$f->getId(),'nom' => $f->getNom(), 'prenom' => $f->getPrenom(), 'email' => $f->getEmail(), 'addresse' => $f->getAddresse(),
            );

            $jsondata[$idx++] = $temp;
        }
        return new JsonResponse($jsondata);

       /* return $this->render('representant/index.html.twig', array(
            'representants' => $representants,
        ));*/
    }
}
