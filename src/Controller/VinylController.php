<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage():Response
    {
        return new Response("Hello Symfony!!!");
    }

    #[Route('/browse/{gene}')]
    public function browse(string $gene):Response
    {
        return new Response('You are browsing now: '. $gene);
    }
}