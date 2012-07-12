<?php

namespace Kareerak\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('KareerakFrontendBundle:Default:index.html.twig', array('name' => 'world'));
    }
}
