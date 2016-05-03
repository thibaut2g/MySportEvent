<?php 
session_start();
	require 'pdo.php';
	$evenement_id=$_POST['participe'];
	$etudiant_id=$_SESSION['id'];
	$bdd->query('DELETE FROM participe WHERE etudiant_id='.$etudiant_id.'  AND evenement_id='.$evenement_id);
	header("Location:../profil.php");
 ?>