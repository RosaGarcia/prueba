<?php

namespace prueba\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('homeBundle:Default:index.html.twig', array('name' => $name));
    }
}
