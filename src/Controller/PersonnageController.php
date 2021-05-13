<?php

namespace App\Controller;

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
     * @Route("/characters", name="personnages")
     */
    public function persos(): Response
    {
        $j1 = [
            "nom" => "Aragorn",
            "age" => 35,
            "sexe" => true,
            "carac" => [
                "force" => 3,
                "agi" => 2,
                "intel" => 1,
            ]
            ];
        $j2 = [
            "nom" => "Galadriel",
            "age" => 22,
            "sexe" => false,
            "carac" => [
                "force" => 1,
                "agi" => 3,
                "intel" => 3,
            ]
            ];
        $j3 = [
            "nom" => "Frodon",
            "age" => 27,
            "sexe" => true,
            "carac" => [
                "force" => 2,
                "agi" => 1,
                "intel" => 3,
            ]
            ];

        $players = [
            "j1" => $j1,
            "j2" => $j2,
            "j3" => $j3
            ];

        return $this->render('personnage/persos.html.twig', [
            "players" => $players
        ]);
    }
}
