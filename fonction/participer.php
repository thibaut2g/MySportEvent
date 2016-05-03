<?php 
session_start();
	require 'pdo.php';
	$evenement_id=$_POST['evenement'];
	$etudiant_id=$_SESSION['id'];
	$req3 = $bdd->query('SELECT COUNT(*) FROM participe WHERE evenement_id='.$evenement_id);
	$req2 = $bdd->query('SELECT nbjoursmax FROM evenements WHERE evenement_id='.$evenement_id);
	$reponse=$req2->fetch();
	$nbjoueur=$req3->fetch();
	$nbplace= $reponse['nbjoursmax']-$nbjoueur['COUNT(*)'];
	if ($nbplace>0) {
		$bdd->query('INSERT INTO participe VALUES('.$etudiant_id.','.$evenement_id.')');
	}
	
	header("Location:../profil.php");
 ?>