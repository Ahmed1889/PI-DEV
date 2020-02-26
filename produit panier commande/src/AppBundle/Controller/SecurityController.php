<?php
namespace AppBundle\Controller;
use BackBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
/**
* @Route("/")
*/
public function RedirectAction(Request $request)
{
$autochecker=$this->container->get('security.authorization_checker');
if($autochecker->isGranted('ROLE_LIVREUR'))
{
return $this->render('Default/indexBack.html.twig');
}
elseif ($autochecker->isGranted('ROLE_CAISSIER'))
{
return $this->render('@Front/Default/index.html.twig',array("panier"=>$request->getSession()->get('panier')));
}
else
{
    $em=$this->getDoctrine()->getManager();
    $produit=$em->getRepository(Produit::class)->findAll();

    return $this->render('default/index.html.twig', array(
        "produit" =>$produit,"panier"=>$request->getSession()->get('panier')
    ));
}
}
}