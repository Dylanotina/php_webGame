<?php

/**
 *
 */
class Vue
{
  function Authentification()
  {
    header("Content-type: text/html; charset=utf-8");
    ?>
    <html>
    <body>

      <h1>Bienvenue sur Bridges!</h1>
    </br>
    <h2>Avant de jouer,veuillez vous connecter.</h2> 
    <br/>
    <br/>
    <form method="post" action="index.php">
    Entrer votre pseudo  <input type="text" name="pseudo"/>
    </br>
    Entrer votre mot de passe <input type="password" name="password"/>
    </br>
    </br>
    <input type="submit" name="soumettre" value="Valider"/>
    </form>
    <br/>
    <br/>
<?php
  }

  function jouer()
  {
    header("Content-type: text/html; charset=utf-8");
    ?>
    <html>
    <body>
      <p>Tu es connecté</p>
      <a href="index.php">Déconnexion</a>
<?php
  }

  function Statistiques(){
    header("Content-type: text/html; charset=utf-8");
    ?>
    <html>
    <body>
    <?php

    ?>
    <br/>
    <br/>
    <h1>Voici vos statistiques :</h1>
    <p>Nombre de parties : </p>
    <p> Victoires:</p>
    <p>Défaites :</p>
<br/>
<p>Classement des 3 meilleurs joueurs :</p>
  <?php
  }
function MauvaiseAuthentification(){
  header("Content-type: text/html; charset=utf-8");
  ?>
  <html>
  <body>
  <?php

  ?>
  <br/>
  <br/>
  <p>Ce compte n'existe pas, veuillez a nouveau vous identifier</p>
  <a href="index.php">Retour</a>
<?php
}

}


 ?>
