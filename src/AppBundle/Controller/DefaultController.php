<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/carousel", name="carousel")
     */
    public function carousel()
    {
        return $this->render('default/carousel.html.twig', [
        ]);
    } 
    /**
     * @Route("/kitchen-sink", name="kitchen-sink")
     */
    public function kitchensink()
    {
        return $this->render('default/kitchen-sink.html.twig', [
        ]);
    }
    /**
     * @Route("/cookiebar", name="cookiebar")
     */    
    public function cookiebar()
    {
        return $this->render('default/cookiebar.html.twig', [
        ]);
    }
    /**
     * @Route("/offcanvas", name="offcanvas")
     */    
    public function offcanvas()
    {
        return $this->render('default/offcanvas.html.twig', [
        ]);
    }
    /**
     * @Route("/comuni", name="comuni")
     */       
    public function comuni()
    {
        return $this->render('default/comuni.html.twig', [
        ]);
    }
    /**
     * @Route("/starter", name="starter")
     */       
    public function starter()
    {
        return $this->render('default/starter.html.twig', [
        ]);
    }
    /**
     * @Route("/jumbotron", name="jumbotron")
     */       
    public function jumbotron()
    {
        return $this->render('default/jumbotron.html.twig', [
        ]);
    }
}

