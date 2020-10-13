<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mon formulaire</title>
  </head>
  <body>
<form method="post" action="traitement.php" enctype="multipart/form-data">
  <label for="login" > Nom : </label>
    <input type="text" name="login" id="login"/><br/>
  <label for="mail" > e-mail : </label>
    <input type="text" name="mail" id="mail"/><br/>
  <label for="passe" > Mot de passe : </label>
    <input type="password" name="passe" value="<?php motDePasse() ;?>" id="passe"/><br/>
  <label for="photo" > Photo : </label>
    <input type="file" name="photo" id="photo"/><br/>
  <label for="naissance" > Date de naissance : </label>
    <input type = "date" name="date" id="date"/><br/>
  <input type="submit" name="envoyer" value="envoyer"/><br/><br/>


<?php

function motDePasse(){
  // genère deux chiffres aléatoires pour le mot de passe
  $chiffre=mt_rand(0,9);
  $chiffre.=mt_rand(0,9);

  // genère trois lettres aléatoires pour le mot de passe
  $lettre="";
  for($j=0;$j<3;$j++){
    $lettre.=chr(mt_rand(65,90));
  }
  // Choix d'un caractère spécial
  $caract="#?$&@";
  $car=substr($caract,mt_rand(0,3),1);
  
  // mot de passe final
  $passe=$chiffre.$lettre;
  echo str_shuffle($passe.$car);
}
 ?>

  </body>
</html>
