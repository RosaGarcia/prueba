<?php

namespace prueba\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use prueba\homeBundle\Entity\Producto;
use Symfony\Component\HttpFoundation\Response;

class testController extends Controller
{
    public function indexAction()
    {
        return $this->render('homeBundle:Test:index.html.twig');
    }

    public function productoAction()
    {
    	$datos = $this->getDoctrine()
    	              ->getRepository('homeBundle:Producto')
    	              ->findAll ();
        return $this->render('homeBundle:Productos:index.html.twig',compact("datos"));
    }

    /**
    * método para cargar el detalle del producto
    **/

    public function detalleAction($id)
    {
    	$datos = $this->getDoctrine()
    	              ->getRepository('homeBundle:Producto')
    	              ->find($id);
    	               if (!$datos)
    	               {
                           throw $this->createNotFoundException(
                           	'No existe el producto con el valor '.$id
                           	 );  
    	               }
    	               return $this->render('homeBundle:Productos:detalle.html.twig',compact("datos"));

    }
    
    public function createAction()
    {
      $product = new Producto();
      $product->getId('2');
      $product->setNombre('Warriors');
      $product->setIdModelo('2');
      $product->setIdCaracteristicas('puertos');
      $product->setIdFabricante('123458');

      $em = $this->getDoctrine()->getManager();
      $em->persist($product);
      $em->flush();

        return new Response('Se ha creado el registro numero '.$product->getId());
    }
 
    public function updateAction($id)  
    {
      $em = $this->getDoctrine()->getManager();
      $product = $em->getRepository('homeBundle:Producto')->find($id);

      if (!$product){
          throw $this->createNotFoundException(
            'No existe el producto'.$id);          
      } 

      $product->setNombre('Warriors FIM');
      $em->flush();

      return $this->redirect($this->generateUrl('home_producto'));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('homeBundle:Producto')->find($id);
     
        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
     
        $em->remove($product);
        $em->flush();
     
        return $this->redirect($this->generateUrl('home_producto'));
    }
}

     