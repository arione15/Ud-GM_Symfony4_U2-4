<?php

namespace App\Controller;

use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $repository): Response
    {
        $continents = $repository -> findAll();
        return $this->render('continent/continents.html.twig', [
            'continents' => $continents
        ]);
    }
    /**
     * @Route("/continent/{id}", name="afficher_continent")
     */
    public function index(Continent $continent): Response
    {
        return $this->render('continent/afficherContinent.html.twig', [
            'continents' => $continents
        ]);
    }
}
