<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Produit;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('BackBundle:Default:index.html.twig');
    }
}
