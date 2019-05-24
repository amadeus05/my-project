<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index()
    {
//        return $this->render('page/index.html.twig', [
//            'controller_name' => 'PageController',
//        ]);
        return new Response("content");
    }

    /**
     * @Route("/page2", name="page2")
     */
    public function index2()
    {
//        return $this->render('page/index.html.twig', [
//            'controller_name' => 'PageController',
//        ]);
        return new Response("mmmmmmmmmm");
    }
    
}
