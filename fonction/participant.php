<h3>Participants</h3><hr>
<?php 
	$req=$bdd->query('SELECT * FROM participe WHERE evenement_id='.$evenement_id);
	while($resultat=$req->fetch()){
		$etudiant_id=$resultat['etudiant_id'];
		$req2=$bdd->query('SELECT * FROM etudiants WHERE etudiant_id='.$etudiant_id);
		$nom=$req2->fetch();
 		echo '<p class="flow-text"><i class="small material-icons">done</i>'.$nom['prenom'].'  <br><b>Ecole :</b> '.$nom['ecole'].' </p>';
	}
 ?>

