<?php

namespace App\Entity;

class Personnage {
  //Variables
  public $nom;
  public $age;
  public $genre;
  public $carac = [];
  
  //static property containing the list of characters
  public static $personnages=[];

  //Constructor
  public function __construct($nom, $age, $genre, $carac) {
    $this -> nom = $nom;
    $this -> age = $age;
    $this -> genre = $genre;
    $this -> carac = $carac;
    self::$personnages[] = $this; //self fait appel à la class Personnages lorsque l'on est à l'intérieur du constructeur
  }

  //function
  public static function creerPersonnages(){
    $p1 = new Personnage("Aragorn", 35, true, [
      "force" => 3,
      "agi" => 2,
      "intel" => 1,
    ]);
    $p2 = new Personnage("Galadriel", 22, true, [
      "force" => 1,
      "agi" => 3,
      "intel" => 3,
    ]);
    $p3 = new Personnage("Frodon", 27, true, [
      "force" => 2,
      "agi" => 1,
      "intel" => 3,
    ]);
  }

  public static function getPersonnageParNom($nom) {
    foreach(self::$personnages as $perso) {
      if (strtolower($perso->nom) === $nom) {
        return $perso;
      }
    }
  }

}
?>