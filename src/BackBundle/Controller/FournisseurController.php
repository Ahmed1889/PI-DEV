<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Fournisseur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Fournisseur controller.
 *
 */
class FournisseurController extends Controller
{
    /**
     * Lists all fournisseur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fournisseurs = $em->getRepository('BackBundle:Fournisseur')->findAll();
        $count = $em->createQuery("select count(u)  from BackBundle:Fournisseur u ")
            ->getresult();


        return $this->render('fournisseur/index.html.twig', array(
            'fournisseurs' => $fournisseurs,'count'=>$count[0][1],
        ));
    }
    public  function Filter2Action(Request $request)
{
    $nomf= $request->get('nomf');

    $fournisseur=$this->getDoctrine()->getManager()
        ->createQuery("select c from BackBundle:Fournisseur c where c.nomf like'%".$nomf."%'
         or c.telf like'%".$nomf."%'  or c.emailf like'%".$nomf."%' 
                       or  c.sitewebf like'%".$nomf."%' ")->getResult();


$cnt=$this->getDoctrine()->getManager()
    ->createQuery("select count(c)  from BackBundle:Fournisseur c where c.nomf like'%".$nomf."%'
         or c.telf like'%".$nomf."%'  or c.emailf like'%".$nomf."%' 
                       or  c.sitewebf like'%".$nomf."%' ")->getResult();


$jsondata=array();
$idx=0;
foreach($fournisseur as $f){
    $temp=array('idf'=>$f->getId(),'nomf'=>$f->getNomf(),'telf'=>$f->getTelf(),'emailf'=>$f->getEmailf(),'sitewebf'=>$f->getSitewebf(),
        'categorief'=>$f->__tooString(),'count'=>$cnt[0][1],
        );

    $jsondata[$idx++]=$temp;
    }
    return new JsonResponse($jsondata);
}

    /**
     * Creates a new fournisseur entity.
     *
     */
    public function newAction(Request $request)
    {
        $fournisseur = new Fournisseur();
        $form = $this->createForm('BackBundle\Form\FournisseurType', $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fournisseur);
            $em->flush();

            return $this->redirectToRoute('fournisseur_index', array('id' => $fournisseur->getId()));
        }

        return $this->render('fournisseur/new.html.twig', array(
            'fournisseur' => $fournisseur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fournisseur entity.
     *
     */
    public function showAction(Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);

        return $this->render('fournisseur/show.html.twig', array(
            'fournisseur' => $fournisseur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fournisseur entity.
     *
     */
    public function editAction(Request $request, Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);
        $editForm = $this->createForm('BackBundle\Form\FournisseurType', $fournisseur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fournisseur_edit', array('id' => $fournisseur->getId()));
        }

        return $this->render('fournisseur/edit.html.twig', array(
            'fournisseur' => $fournisseur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fournisseur entity.
     *
     */
    public function deleteAction(Request $request, Fournisseur $fournisseur)
    {
        $form = $this->createDeleteForm($fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fournisseur);
            $em->flush();
        }

        return $this->redirectToRoute('fournisseur_index');
    }

    /**
     * Creates a form to delete a fournisseur entity.
     *
     * @param Fournisseur $fournisseur The fournisseur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fournisseur $fournisseur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fournisseur_delete', array('id' => $fournisseur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
