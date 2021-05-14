<?php

namespace App\Entity;

class Arme {

  //Variables
  private $nom;
  private $description;
  private $carac = [];

  //Créer variable tableau associatif qui contiendra les infos.
  public static $armes=[];

  //Constructor
  public function __construct($nom, $description, $carac) {
    $this -> nom = $nom;
    $this -> description = $description;
    $this -> carac = $carac;
    self::$armes[] = $this;
  }

  //Getters
  public function getNom(){ return $this -> nom;}
  public function getDescription(){ return $this -> description; }
  public function getCarac(){ return $this -> carac; }
  
  //Setters
  public function setNom($nom){ $this-> nom = $nom; return $this; }
  public function setDescription($description){ $this-> description = $description; return $this; }
  public function setCarac($carac){ $this->carac = $carac; return $this; }

  //Create objects
  public static function creerArmes() {
    $a1 = new Arme("épée", "épée tranchante à une main" ,["degats" => 32, "dexterite" => -5,]);
    $a2 = new Arme("arc", "Arc puissant",["degats" => 22, "dexterite" => 10,]);
    $a3 = new Arme("hache", "hache de guerre à deux mains",["degats" => 47, "dexterite" => -10,]);
  }
  
  public static function getArmesParNom($nom) {
    foreach(self::$armes as $arme) {
      if (strtolower(str_replace("é","e", $arme->nom)) === $nom) {
        return $arme;
      }
    }
  }
}


?>