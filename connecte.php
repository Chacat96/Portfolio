<?php
require_once "core/entity/header.php";

session_start();

// Vérifie si le bouton de déconnexion a été soumis
if (isset($_POST['deconnecte'])) {
  // Détruit la session
  session_destroy();

  // Redirige vers la page d'accueil
  header('Location: accueil.php');
  exit;
}

//vérifie si le bouton d'ajout à été soumis
if(isset($_POST['ajout'])) {

  
  //Redirige vers la page d'ajout
  header('Location: ajout.php');
}

//vérifie si le bouton de modification à été soumis
if(isset($_POST['modifier'])) {

  
  //Redirige vers la page de mofif
  header('Location: modif.php');
}

?>

<h1> Connecté</h1>

<div class="connecte">

    <div class="ajout">
      <form action="" method="post">
        <input type="submit" value="Ajouter un projet" name="ajout">
        </form>
    </div>

    <div class="modifier">
      <form action="" method="post">
       <input type="submit" value="Modifier" name= "modifier">
       </form>
    </div>

    <div class="deconnecter">
      <form action="" method="post">
      <input type="submit" value="Se déconnecter" name="deconnecte">
      </form>
    </div>

</div>