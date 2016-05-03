<?php 
	$evenement_id=$_GET['id'];
	$etudiant_id=$_SESSION['id'];
	if (isset($_POST['commenter'])) {
		$bdd->query('INSERT INTO commentaires VALUES (NULL, "'.$_POST['message'].'", NOW(), "'.$etudiant_id.'", "'.$evenement_id.'" ) ');
	}
	$req=$bdd->query('SELECT * FROM commentaires WHERE evenement_id='.$evenement_id);
	
 ?>

 <form class="transparent" method=post>
 	<div class="row">
 		<div class="col s12 m7">
 		<div class="top"></div>
	     <h3>Commentaires</h3><hr>

	 <?php  while($rep=$req->fetch()){
			$commentaire_id=$rep['commentaire_id'];
			$nom=$bdd->query('SELECT prenom FROM etudiants,commentaires WHERE commentaires.etudiant_id=etudiants.etudiant_id and commentaire_id='.$commentaire_id);
			$nom=$nom->fetch();
			$prenom=$nom['prenom'];
			if ($rep['etudiant_id']==$_SESSION['id']) {
				$comment='comment2';
			}else{
				$comment='comment';
			}
			
			echo '<div class="'.$comment.'"><p class="flowtext"><b>'.$prenom.'   :</b>           '.$rep['message'].'</p>
						<p>'.$rep['dateredaction'].'</p></div>
					' ;		}?>

	        <div class="input-field col s12">
	          <input id="titre" type="text" name="message" class="validate">
	          <label for="titre">Message</label>
	        </div>
	        <input type="hidden" name="commenter" value='true'>
	        <input class="large btn-large indigo darken-3" type="submit" value="Envoyer"  />
	</div>
	</div>

	

	
	
 </form>

 