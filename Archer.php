<?php
//L'objet Archer hérite des proprietes de la classe abtraite Stats
//et implemente l'interface iClasse
  class Archer extends Stats implements iClasse {
//definit le nom de la classe lors de la creation d'une nouvelle instance
    public function __construct() {
      $this->nom = "Archer";
    }
//Implementation de l'interface iClasse nous permet d'appeler notre méthode attaquer()
    public function attaquer() {
      echo " tire une flèche";
    }

  }
