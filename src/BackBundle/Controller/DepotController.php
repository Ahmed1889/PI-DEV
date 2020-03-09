<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Depot;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Depot controller.
 *
 */
class DepotController extends Controller
{
    /**
     * Lists all depot entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $depots = $em->getRepository('BackBundle:Depot')->findAllDisponible();

        return $this->render('depot/index.html.twig', array(
            'depots' => $depots,

        ));
    }

    /**
     * Creates a new depot entity.
     *
     */
    public function newAction(Request $request)
    {
        $depot = new Depot();
        $form = $this->createForm('BackBundle\Form\DepotType', $depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($depot);
            $em->flush();
            return $this->redirectToRoute('send_notification');
            //return $this->redirectToRoute('depot_show', array('id' => $depot->getId()));
        }

        return $this->render('depot/new.html.twig', array(
            'depot' => $depot,

            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a depot entity.
     *
     */
    public function showAction(Depot $depot)
    {
        $deleteForm = $this->createDeleteForm($depot);

        return $this->render('depot/show.html.twig', array(
            'depot' => $depot,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing depot entity.
     *
     */
    public function editAction(Request $request, Depot $depot)
    {
        $deleteForm = $this->createDeleteForm($depot);
        $editForm = $this->createForm('BackBundle\Form\DepotType', $depot);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('depot_index', array('id' => $depot->getId()));
        }

        return $this->render('depot/edit.html.twig', array(
            'depot' => $depot,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a depot entity.
     *
     */
    public function deleteAction(Request $request, Depot $depot)
    {
        $form = $this->createDeleteForm($depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($depot);
            $em->flush();
        }

        return $this->redirectToRoute('depot_index');
    }

    /**
     * Creates a form to delete a depot entity.
     *
     * @param Depot $depot The depot entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Depot $depot)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('depot_delete', array('id' => $depot->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function FilterNAction()
    {
       // $val=$_POST['key'];
        $em = $this->getDoctrine()->getManager();

        $depots = $em->getRepository('BackBundle:Depot')->findByName();

        $jsondata = array();
        $idx = 0;
        foreach ($depots as $f) {
            $temp = array('id'=>$f->getId(),'nom' => $f->getNom(), 'addresse' => $f->getAddresse(), 'capacite' => $f->getCapacite(), 'disponibilite' => $f->getDisponibilite(),
            );

            $jsondata[$idx++] = $temp;
        }
        return new JsonResponse($jsondata);
    }
    public function FilterCAction()
    {
        // $val=$_POST['key'];
        $em = $this->getDoctrine()->getManager();

        $depots = $em->getRepository('BackBundle:Depot')->findByCapacite();

        $jsondata = array();
        $idx = 0;
        foreach ($depots as $f) {
            $temp = array('id'=>$f->getId(),'nom' => $f->getNom(), 'addresse' => $f->getAddresse(), 'capacite' => $f->getCapacite(), 'disponibilite' => $f->getDisponibilite(),
            );

            $jsondata[$idx++] = $temp;
        }
        return new JsonResponse($jsondata);
    }

    public function countAction()
    {
        $em = $this->getDoctrine()->getManager();
        $depots = $em->getRepository('BackBundle:Depot')->findAllDesc();
        $cnt=$this->getDoctrine()->getManager()
            ->createQuery("select count(c)  from BackBundle:Depot c where c.disponibilite = 1 ORDER BY c.id")->getResult();



        $jsondata=array('count'=>$cnt[0][1],);
       /* $idx=0;

            $temp=array('count'=>$cnt[0][1],
            );

            $jsondata[$idx++]=$temp; */

        return new JsonResponse($jsondata);
    }


    public function sendNotificationAction(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification('Creation du nouveau depot .!');
        $notif->setMessage('Un nouveau depot a ete cree');
        $notif->setLink('http://symfony.com/');
        // or the one-line method :
        // $manager->createNotification('Notification subject','Some random text','http://google.fr');

        // you can add a notification to a list of entities
        // the third parameter ``$flush`` allows you to directly flush the entities
        $manager->addNotification(array($this->getUser()), $notif, true);

        return $this->redirectToRoute('depot_index');
    }
}
