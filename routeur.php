<?php

require_once 'ControleurAuthentification.php';



class Routeur {

  private $ctrlAuthentification;
  //private $ctrlMessage;


  public function __construct() {
    $this->ctrlAuthentification= new ControleurAuthentification();
    //$this->ctrlMessage= new ControleurMessage();
  }

  // Traite une requête entrante
  public function routerRequete() {


try{

if (!empty($_POST['pseudo'])){
setcookie("pseudo",$_POST['pseudo']);
$this->ctrlAuthentification->controleConnexion($_POST['pseudo'],$_POST['password']);
}
/*else{
	if (!empty($_POST['message'])){
             $this->ctrlMessage->ajoutMessage($_POST['message']);

		}
*/

	else{
	$this->ctrlAuthentification->acceuil();
	}
}



//}
    catch (TableAccesException $e) {
      echo "probleme d'acces à une table de la base ";
    }
    catch (ConnexionException $e) {
      echo "probleme de connexion à la base ";
    }



 }

}




?>
