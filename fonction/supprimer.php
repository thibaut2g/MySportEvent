<?php 
require 'pdo.php';
$id=$_POST['evenement'];
$req = $bdd->query('DELETE FROM evenements WHERE evenement_id='.$id);
$req = $bdd->query('DELETE FROM participe WHERE evenement_id='.$id);
header("Location:../profil.php");
