<?php
namespace AppBundle\Controller;
use BackBundle\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
/**
* @Route("/")
*/
public function RedirectAction()
{
$autochecker=$this->container->get('security.authorization_checker');
if($autochecker->isGranted('ROLE_LIVREUR'))
{
return $this->render('Default/indexBack.html.twig');
}
elseif ($autochecker->isGranted('ROLE_CAISSIER'))
{
return $this->render('@Front/Default/index.html.twig');
}
else
{
    $em=$this->getDoctrine()->getManager();
    $produit=$em->getRepository(Produit::class)->findAll();

    return $this->render('default/index.html.twig', array(
        "produit" =>$produit
    ));
}
}
}