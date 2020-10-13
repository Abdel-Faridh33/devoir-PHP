<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>traitement devoir 2018</title>
  </head>
  <body>


<?php
$erreur_login=NULL;
$erreur_mail=NULL;
$erreur_naissance=NULL;
$erreur_photo=NULL;
$erreur_photo0=NULL;
$erreur_photo1=NULL;
$i=0;
if(empty($_POST)){
echo "Veillez entrer tous les champs";
}else{
  $valeurMax=1048576;
  $login=$_POST['login'];
  $mail=$_POST['mail'];
  $date=getdate();
  if($date['year'] - $_POST['date']['year'] < 18){
    echo "vous n'etes pas autorisé à vous enregistrer.";
  }
if(empty($_POST['login'])){
  $erreur_nom="veillez entrer votre login";
  $i++;
}
if(empty($_POST['mail'])){
  $erreur_nom="Veillez entre votre mail";
  $i++;
}
if(empty($_FILES['photo']['size'])){
  $erreur_photo0="veillez inserer une photo";
  $i++;
}
if(($_FILES["photo"]["size"])>$valeurMax){
  $erreur_photo1="La taille de votre photo est trop grande";
  $i++;
  if($_FILLE["photo"]){

  }
}
if($i==0){
  echo "Votre nom est year\n : ".$nom;
  echo "Votre prenom est : ".$prenom;
}else{
  echo $erreur_login;
  echo $erreur_mail;
  echo $erreur_naissance;
  echo $erreur_photo;
  echo $erreur_photo0;
  echo $erreur_photo1;
}


}

 ?>
</body>
</html>
