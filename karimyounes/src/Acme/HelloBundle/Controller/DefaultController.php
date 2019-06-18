<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\HelloBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        
//        return new \Symfony\Component\HttpFoundation\Response('<html><body>Hello '.$name.'!</body></html>');
        
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => "ADMIN"));
    }
    
    

    
    
}
