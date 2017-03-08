<?php
//L'objet Personnage hérite des proprietes de la classe abtraite Stats
class Personnage extends Stats{
  //on initialise nos variables publique pour y avoir acces n'importe ou
  public $race = null;
  public $classe = null;
//Methode qui sera appellé lors de la creation d'une nouvelle instance
// de Personnage. On met en parametre: le nom, la race, la classe
//ces parametres seront requis lors de la creation
  public function __construct($nom, $race, $classe) {
    $this->nom = $nom;
    $this->race = $race;
    $this->classe = $classe;
  }
//On implemente la methode attaquer()de l'interface iClasse
  public function attaquer() {
    $this->classe->attaquer();
  }
//On implemente la methode seDeplacer()de l'interface iRace
  public function seDeplacer() {
    $this->race->seDeplacer(2);
  }
//
  public function attendre() {

  }

  public function mourir() {

  }



}
