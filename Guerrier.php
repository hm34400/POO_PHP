<?php
//L'objet Guerrier hérite des proprietes de la classe abtraite Stats
//et implemente l'interface iClasse
class Guerrier extends Stats implements iClasse {
//definit le nom de la classe lors de la creation d'une nouvelle instance
  public function __construct() {
    $this->nom = "Guerrier";
  }
//Implementation de l'interface iClasse nous permet d'appeler notre méthode attaquer()
  public function attaquer() {
    echo " attaque";
  }

}
