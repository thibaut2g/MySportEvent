<?php
	require "pdo.php";
	$titre= $_POST['titre'];
	$description= $_POST['description'];
	$date= $_POST['date'];
	$heure= $_POST['heure'];
	$sport= $_POST['sport'];
	$nbmax= $_POST['sbmax'];
	$photo = $_FILES['fichier']['name'];

	move_uploaded_file ($_FILES['fichier']['tmp_name'],"img/".$_FILES['fichier']['name']);
	$bdd->query('INSERT INTO evenements (nom_evenement,date_evenement,heure_evenement, type_sport,informations,nbjoursmax) VALUES ("'.$titre.'","'.$date.'","'.$heure.'","'.$sport.'","'.$description.'","'.$nbmax.'")');
