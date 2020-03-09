<?php

namespace BackBundle\Controller;

use AppBundle\Entity\User;
use BackBundle\Entity\employee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Employee controller.
 *
 * @Route("employee")
 */
class employeeController extends Controller
{
    /**
     * Lists all employee entities.
     *
     * @Route("/", name="employee_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employees = $em->getRepository('BackBundle:employee')->findAll();

        return $this->render('employee/index.html.twig', array(
            'employees' => $employees,
        ));
    }

    /**
     * Creates a new employee entity.
     *
     * @Route("/new", name="employee_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $employee = new Employee();
        $form = $this->createForm('BackBundle\Form\employeeType', $employee);
        $form->handleRequest($request);
        $user= new User();
        $user->setEmail($employee->getEmail());
        $user->setPassword($employee->getPassword());
        $user->setUsername($employee->getUsername());
        $user->setConfirmationToken($employee->getConfirmationToken());
        $user->setEmailCanonical($employee->getEmailCanonical());
        $user->setPlainPassword($employee->getPlainPassword());
        $user->setRoles($employee->getRoles());
        $user->setUsernameCanonical($employee->getUsernameCanonical());
        $user->setAdresseC('n est pas client');
        $user->setEnabled(true);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            /** @var UploadedFile $file */
            $file = $employee->getImage();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $employee->setImage($filename);
            $em->persist($employee);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('employee_show', array('id' => $employee->getId()));
        }

        return $this->render('employee/new.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a employee entity.
     *
     * @Route("/{id}", name="employee_show")
     * @Method("GET")
     */
    public function showAction(employee $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);

        return $this->render('employee/show.html.twig', array(
            'employee' => $employee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing employee entity.
     *
     * @Route("/{id}/edit", name="employee_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, employee $employee)
    {

        $deleteForm = $this->createDeleteForm($employee);
        $editForm = $this->createForm('BackBundle\Form\employeeType', $employee);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid() ) {
            /** @var UploadedFile $file */
            $file = $employee->getImage();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $employee->setImage($filename);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('employee_index');
        }

        return $this->render('employee/edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a employee entity.
     *
     * @Route("/{id}", name="employee_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $employe = $em->getRepository(employee::class)->find($id);
        $em->remove($employe);
        $em->flush();
        return $this->redirectToRoute("employee_index");

    }

    /**
     * Creates a form to delete a employee entity.
     *
     * @param employee $employee The employee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employee_delete', array('id' => $employee->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
