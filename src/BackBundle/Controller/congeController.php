<?php

namespace BackBundle\Controller;

use BackBundle\Entity\conge;
use BackBundle\Entity\employee;
use Discutea\DForumBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Conge controller.
 *
 * @Route("conge")
 */
class congeController extends Controller
{
    /**
     * Lists all conge entities.
     *
     * @Route("/listeConges", name="conge_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conges = $em->getRepository('BackBundle:conge')->findAll();

        return $this->render('conge/index.html.twig', array(
            'conges' => $conges,
        ));
    }

    /**
     * Creates a new conge entity.
     *
     * @Route("/new", name="conge_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $conge = new Conge();
        $form = $this->createForm('BackBundle\Form\congeType', $conge);
        $form->handleRequest($request);
        $email_user = $this->container->get('security.token_storage')->getToken()->getUser()->getEmail();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(employee::class)->findOneBy(array('email' => $email_user));
            $conge->setIdEmployee($user);
            $conge->setEtat("En Cours");
            $em->persist($conge);
            $em->flush();

            return $this->redirectToRoute('conge_show', array('id' => $conge->getId()));
        }

        return $this->render('conge/new.html.twig', array(
            'conge' => $conge,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a conge entity.
     *
     * @Route("/{id}", name="conge_show")
     * @Method("GET")
     */
    public function showAction(conge $conge)
    {
        $deleteForm = $this->createDeleteForm($conge);

        return $this->render('conge/show.html.twig', array(
            'conge' => $conge,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing conge entity.
     *
     * @Route("/{id}/edit", name="conge_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, conge $conge)
    {
        $deleteForm = $this->createDeleteForm($conge);
        $editForm = $this->createForm('BackBundle\Form\congeType', $conge);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conge_index');
        }

        return $this->render('conge/edit.html.twig', array(
            'conge' => $conge,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a conge entity.
     *
     * @Route("/{id}", name="conge_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $conge = $em->getRepository(conge::class)->find($id);
        $em->remove($conge);
        $em->flush();
        return $this->redirectToRoute("conge_index");

    }

    /**
     * Creates a form to delete a conge entity.
     *
     * @param conge $conge The conge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(conge $conge)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conge_delete', array('id' => $conge->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function TraiterCongeAction()
    {
        $conge= $this->getDoctrine()->getManager()->getRepository(conge::class)->findBy(['etat'=>'En Cours']);
        return $this->render("conge/traiter.html.twig",array('conge'=>$conge));
    }
    public function AccepterCongeAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $conge=$em->getRepository(conge::class)->find($id);
        $conge->setEtat("Accepté");
        $em->persist($conge);
        $em->flush();
        return $this->redirectToRoute('conge_index');
    }
    public function RefuserCongeAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $conge=$em->getRepository(conge::class)->find($id);
        $conge->setEtat("Refusé");
        $em->persist($conge);
        $em->flush();
        return $this->redirectToRoute('conge_index');
    }

    public function notifierAction()
    {
        $cmd=$this->getDoctrine()->getManager()->createQuery("SELECT r FROM BackBundle:conge r WHERE r.etat='En Cours' ORDER BY r.id DESC")->getResult();
        $post=$this->getDoctrine()->getManager()->getRepository(Post::class)->findAll();

        $count=$this->getDoctrine()->getManager()->createQuery("SELECT COUNT(r) FROM BackBundle:conge r WHERE r.etat='En Cours'")->getResult();




        return $this->render('base2.html.twig', array(
            'not1' => $cmd,'count' => $count[0][1],'post' =>$post,
        ));
    }
}
