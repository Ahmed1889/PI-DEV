<?php

namespace AppBundle\Controller;
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
            return $this->render('default/indexBack.html.twig');
        }

        else
        {
            return $this->render('default/index.html.twig');
        }
    }
}
