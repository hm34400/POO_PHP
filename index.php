<?php
//Importe les differents fichiers
require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");
/*Creation d'une nouvelles instances de l'objet Personnage
 qui prend en parametre le nom et
 une nouvelle instance des objets Orc() et Guerrier()
 */
$perso1 = new Personnage("Bob", new Orc(), new Guerrier());
// On passe par les accesseurs pour récuperer les proprietes du
// nouveau personnage qui vient d'instancer
echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();
//Appelle des methodes de nos interfaces qui sont implemente dans la classe
//et la race
$perso1->attaquer();
$perso1->seDeplacer();

$perso2 = new Personnage("Bill", new Orc(), new Archer());

$perso2->attaquer();
