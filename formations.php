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

$reponse = $bdd->query('SELECT * FROM formations');
$donnees = $reponse->fetch();

$Smarty->assign('anneeform1',$donnees['annee_form1']);
$Smarty->assign('intituleform1',$donnees['intitule_form1']);
$Smarty->assign('description1',$donnees['description1']);
$Smarty->assign('univ1',$donnees['universite1']);
$Smarty->assign('mention1',$donnees['mention1']);

$Smarty->assign('anneeform2',$donnees['annee_form2']);
$Smarty->assign('intituleform2',$donnees['intitule_form2']);
$Smarty->assign('description2',$donnees['description2']);
$Smarty->assign('univ2',$donnees['universite2']);
$Smarty->assign('mention2',$donnees['mention2']);

$Smarty->assign('anneeform3',$donnees['annee_form3']);
$Smarty->assign('intituleform3',$donnees['intitule_form3']);
$Smarty->assign('description3',$donnees['description3']);
$Smarty->assign('univ3',$donnees['universite3']);
$Smarty->assign('mention3',$donnees['mention3']);

$Smarty->display('formations.tpl');


?>

