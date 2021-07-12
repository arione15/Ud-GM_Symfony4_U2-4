<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository): Response
    {
        //$repository = $this -> getDoctrine() -> getRepository(Animal::class);
        $animaux = $repository -> findAll();
        return $this->render('animal/index.html.twig', [
            "animaux" => $animaux
        ]);
    }
    /**
     * @Route("/animal/{id}", name="afficher_Animal")
     */
    public function afficherAnimal(AnimalRepository $repository, $id)
    {
        $animal = $repository -> find($id);
        return $this->render('animal/afficherAnimal.html.twig', [
            "animal" => $animal
        ]);
    }
}
