<ul class="collapsible white" data-collapsible="accordion">
<?php 
	require 'pdo.php';
	$etudiant_id=$_SESSION['id'];
	$req=$bdd->query('SELECT nom_evenement, evenements.evenement_id, informations, date_evenement FROM participe, evenements WHERE participe.etudiant_id='.$etudiant_id.' AND evenements.evenement_id=participe.evenement_id');
	$a=0;
	while($rep=$req->fetch()){
		echo '<li>
			      <div class="collapsible-header">'.$rep['nom_evenement'].'.....'.$rep['date_evenement'].'</div>
		
			      <div class="collapsible-body"><p>'.$rep['informations'].'</p>
			      	<div class="row">
			      		<div class="col s6 center"><a href="evenement.php?id='.$rep['evenement_id'].'" class="waves-effect waves-light btn">Voir</a>
			      		</div>
			      		<div class="col s6">
			      			<form class="transparent center" action="fonction/participeplus.php" method=post>
								<input type="hidden" name="participe" value='.$rep['evenement_id'].'>
								<input type="submit" class="btn" value="Ne plus participer">
							</form>
			      		</div>
			      	</div>
			      </div>
			      
			    </li>';
			    $a++;

	}

	if ($a==0) {
		echo'<p class="flow-text">Tu ne participes à aucun événement pour le moment</p>';
	}
	
 ?>
 </ul>

