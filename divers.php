
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

$reponse = $bdd->query('SELECT * FROM divers');
$donnees = $reponse->fetch();



$Smarty->assign('divers1',$donnees['d1']);
$Smarty->assign('divers2',$donnees['d2']);
$Smarty->assign('divers3',$donnees['d3']);

$Smarty->display('divers.tpl')



?>


