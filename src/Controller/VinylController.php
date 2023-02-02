<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response("Hello Symfony!!!");
    }

    #[Route('/browse/{gene}')]
    public function browseGen(string $gene = null): Response
    {
        if ($gene) {
            $geneTitle = 'You are browsing now: ' . u(str_replace('-', ' ', $gene))->title(true);
        } else {
            $geneTitle= 'All Generes';
        }
        return new Response($geneTitle);
    }
}