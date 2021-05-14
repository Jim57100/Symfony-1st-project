<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArmesController extends AbstractController
{
    /**
     * @Route("/armes", name="armes")
     */
    public function index(): Response
    {
        Arme::creerArmes();
        return $this->render('armes/armes.html.twig', [
            'armes' => Arme::$armes,
        ]);
    }
     
    /**
     * @Route("/armes/{nom}", name="afficher_armes")
     */
    public function afficherArmes($nom): Response
    {
        Arme::creerArmes($nom);
        $arme = Arme::getArmesParNom($nom);
        return $this->render('armes/arme.html.twig', [
         "arme" => $arme,
        ]);
    }
}
