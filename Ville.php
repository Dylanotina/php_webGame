<?php


class Ville{
// permet d'identifier de manière unique la ville
private $id;
private $nombrePontsMax;
private $nombrePonts;
// un tableau associatif qui stocke les villes qui sont reliées à la ville cible et le nombre de ponts qui les relient (ce nombre de ponts doit être <=2)
private $villesLiees;

private $positionX;
private $positionY;

private $orientation;


// constructeur qui permet de valuer les 2 attributs de la classe
function __construct($id,$nombrePontsMax,$nombrePonts,$posX,$posY){
$this->id=$id;
$this->nombrePontsMax=$nombrePontsMax;
$this->nombrePonts=$nombrePonts;
$this->villesLiees=null;
$this->positionX = $posX;
$this->positionY = $posY;
$this->orientation = 0;
}

// sélecteur qui retourne la valeur de l'attribut id
function getId(){
return $this->id;
}

function getX(){
  return $this->positionX;
}

function getY(){
  return $this->positionY;
}

// sélecteur qui retourne la valeur de l'attribut nombrePontsMax
function getNombrePontsMax(){
return $this->nombrePontsMax;
}
// sélecteur qui retourne la valeur de l'attribut nombrePonts
function getNombrePonts(){
return $this->nombrePonts;
}

//modifieur qui permet de valuer l'attribut nombrePonts
function setNombrePonts($nb){
$this->nombrePonts=$nb;
}

//il faut ici implémenter les méthodes qui permettent de lier des villes entre elles, ...
function associerVille($ville1,$ville2){
  if($ville1->positionX==$ville2->positionX){
      if ($ville1->positionY-$ville2->positionY<0) {
        $ville1->orientation = $ville1->orientation + 1;
        $ville2->orientation = $ville2->orientation + 1000;
      } else if($ville1->positionY-$ville2->positionY>0){
        $ville1->orientation = $ville1->orientation + 1000;
        $ville2->orientation = $ville2->orientation + 1;
      }
  }
  if($ville1->positionY==$ville2->positionY){
      if ($ville1->positionX-$ville2->positionX<0) {
        $ville1->orientation = $ville1->orientation + 100;
        $ville2->orientation = $ville2->orientation + 10;
      } else if($ville1->positionX-$ville2->positionX>0){
        $ville1->orientation = $ville1->orientation + 10;
        $ville2->orientation = $ville2->orientation + 100;
      }
  }
}



}
