<?php 
session_start();
	require 'pdo.php';
	$evenement_id=$_POST['evenement'];
	$etudiant_id=$_SESSION['id'];
	$bdd->query('INSERT INTO participe VALUES('.$etudiant_id.','.$evenement_id.')');
	header("Location:../profil.php");
 ?>