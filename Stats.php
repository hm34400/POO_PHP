<?php
//Super class qui sera appliqué par les classes qui l'etendent
abstract class Stats {
//Initialisation de nos propriétes qui a une visibilité protected
  protected $nom = "test";
  protected $pdv = 0;
  protected $atk = 0;
  protected $def = 0;

 //Initialisation de notre accesseur qui retourne notre propriéte nom
    public function getNom(){
      return $this->nom;
    }
 //Initialisation de notre accesseur qui permet d'attribuer une valeur
 //à notre propriété nom
    public function setNom($nom){
      $this->nom = $nom;
    }
}
