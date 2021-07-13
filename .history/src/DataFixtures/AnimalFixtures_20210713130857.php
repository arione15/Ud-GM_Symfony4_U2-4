<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Continent();
        $c1 -> setLibelle()
        


        $f1 = new Famille();
        $f1 ->setLibelle("mammifères")
            ->setDescription("Animaux vertébrés nourrissant leurs petits avec du lait");
        $manager->persist($f1);
        $f2 = new Famille();
        $f2 ->setLibelle("reptiles")
            ->setDescription("Animaux vertébrés qui rampent");
        $manager->persist($f2);
        $f3 = new Famille();
        $f3 ->setLibelle("poissons")
            ->setDescription("Animaux invertébrés du monde aquatique");
        $manager->persist($f3);

        $a1 = new Animal();
        $a1 ->setNom("Chien")
            ->setDescription("Un animal domestique")
            ->setImage("Chien.png")
            ->setPoids(50)
            ->setDangereux(false)
            ->setFamille($f1);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2 ->setNom("Cochon")
            ->setDescription("Un animal d'élevage")
            ->setImage("Cochon.png")
            ->setPoids(100)
            ->setDangereux(false)
            ->setFamille($f1);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3 ->setNom("Serpent")
            ->setDescription("Un animal dangereux")
            ->setImage("Serpent.png")
            ->setPoids(5)
            ->setDangereux(true)
            ->setFamille($f2);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4 ->setNom("Crocodile")
            ->setDescription("Un animal très dangereux")
            ->setImage("Croco.png")
            ->setPoids(250)
            ->setDangereux(true)
            ->setFamille($f2);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5 ->setNom("Requin")
            ->setDescription("Un animal marin très dangereux")
            ->setImage("Requin.png")
            ->setPoids(350)
            ->setDangereux(true)
            ->setFamille($f3);
        $manager->persist($a5);

        $manager->flush();
    }
}
