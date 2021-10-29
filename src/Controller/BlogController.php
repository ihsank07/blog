<?php
// src/Controller/BlogFixtureController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Blog;
use Doctrine\ORM\EntityManagerInterface;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function load()
    {


      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository(Blog::class);
      $items = $repository->findAll();

      return $this->render('blog_fixture/index.html.twig', [
        'items'=>$items
    
    ]);

    }
}
