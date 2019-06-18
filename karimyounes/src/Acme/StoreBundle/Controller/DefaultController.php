<?php
namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    
        
    public function createAction(){
        $product = new Product();
        $product->setName("A Foo Bar");
        $product->setPrice(19.99);
        $product->setDescription("Lorem inpus total");
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();
        
//        return new Response("Create product id ".$product->getId());
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $product->getId()));
    }
}
