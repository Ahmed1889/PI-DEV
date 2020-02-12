<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommandeController extends Controller
{
    public function AfficheCommandeAction()
    {

        $em=$this->getDoctrine()->getManager();
        $commande=$em->getRepository(Commande::class)->findAll();
        return $this->render('@Back/Default/AfficheCommande.html.twig', array(
            "commande" =>$commande
        ));

    }
    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository(Commande::class)->find($id);
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute("affichercommande");

    }
}
