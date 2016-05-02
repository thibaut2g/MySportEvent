<?php 
	require 'pdo.php';
	$etudiant_id=$_SESSION['id'];
	$req=$bdd->query('SELECT nom_evenement FROM participe, evenements WHERE participe.etudiant_id='.$etudiant_id.' AND evenements.evenement_id=participe.evenement_id');
	while($rep=$req->fetch()){
		echo 'tu participes à l\'événement :',$rep['nom_evenement'];
	}

	
 ?>