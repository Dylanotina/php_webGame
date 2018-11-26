<?php
require_once PATH_VUE."/Vue.php";
require_once PATH_MODELE."/modele.php";

class ControleurAuthentification
{
private $vue;
private $modele;
  function __construct()
  {
    $this->vue=new Vue();
    $this->modele=new Modele();
  }

function acceuil()
{
  $this->vue->Authentification();
}

  function controleConnexion($pseudo, $password){
    if($this->modele->exists($pseudo,$password)){
      $this->vue->jouer();
    }else {
      $this->vue->MauvaiseAuthentification();
    }
  }
}

 ?>
