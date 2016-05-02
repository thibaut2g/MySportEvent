	<ul class="collapsible" data-collapsible="accordion">

	<?php
		require 'pdo.php';
		$req = $bdd->query('SELECT evenement_id,nom_evenement,informations, date_evenement FROM evenements WHERE evenement_admin='.$_SESSION['id']);
		while ($reponse=$req->fetch()){
			echo '
				<li>
			      <div class="collapsible-header">'.$reponse['nom_evenement'].'.....'.$reponse['date_evenement'].'</div>
		
			      <div class="collapsible-body"><p>'.$reponse['informations'].'</p>
			      	<div class="row">
			      	<div class="col s6 center-align">
			      	<form class="transparent" action="modifier.php" method=post>
						<input type="hidden" name="evenement" value='.$reponse['evenement_id'].'>
						<input type="submit" class="btn"  value="Modifier">
					</form>
					</div>
					<div class="col s6 center-align">
					<form class="transparent" action="fonction/supprimer.php" method=post>
						<input type="hidden" name="evenement" value='.$reponse['evenement_id'].'>
						<input type="submit" class="btn" value="Supprimer">
					</form>
					</div>
					</div>
					</div>
			    </li>';
		}
	?>
	</ul>
<script>
 $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false
    });
  });
 </script>