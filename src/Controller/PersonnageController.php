<?php

namespace App\Controller;

use App\Entity\Personnage;
use App\Entity\Armes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }
    /**
     * @Route("/persos", name="personnages")
     */
    public function persos(): Response
    {
        Personnage::creerPersonnages();
        return $this->render('personnage/persos.html.twig', [
          "players" => Personnage::$personnages
        ]);
    }
    /**
     * @Route("/persos/{nom}", name="afficher_personnage")
     */
    public function afficherPerso($nom): Response
    {
        Personnage::creerPersonnages();
        $perso = Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/perso.html.twig', [
         "perso" => $perso
        ]);
    }
   
}