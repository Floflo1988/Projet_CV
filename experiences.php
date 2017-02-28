
<?php

require("smarty-3.1.30/libs/Smarty.class.php");

$Smarty = new Smarty;
  try
  {
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
  // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage("Echec de connection Base de données"));
  }

  $reponse = $bdd->query('SELECT * FROM experiences');
  $donnees = $reponse->fetch();

$Smarty->assign('anneexp1',$donnees['annee_xp1']);
$Smarty->assign('description1',$donnees['description1']);
$Smarty->assign('anneexp2',$donnees['annee_xp2']);
$Smarty->assign('description2',$donnees['description2']);
$Smarty->assign('anneexp3',$donnees['annee_xp3']);
$Smarty->assign('description3',$donnees['description3']);

$Smarty->display('experiences.tpl');

  ?>


  
