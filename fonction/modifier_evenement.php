	<ul class="collapsible" data-collapsible="accordion">

	<?php
		require 'pdo.php';
		$req = $bdd->query('SELECT evenement_id,nom_evenement,informations, DATE_FORMAT(date_evenement,"%d %m %y") as date FROM evenements');
		while ($reponse=$req->fetch()){
			echo '
				<li>
			      <div class="collapsible-header">'.$reponse['nom_evenement'].'.....'.$reponse['date'].'</div>
		
			      <div class="collapsible-body"><p>'.$reponse['informations'].'</p>
			      	<div class="row">
			      	<div class="col s6 center-align">
			      	<form action="modifier.php" method=post>
						<input type="hidden" name="evenement" value='.$reponse['evenement_id'].'>
						<input type="submit" class="btn teal"  value="Modifier">
					</form>
					</div>
					<div class="col s6 center-align">
					<form action="fonction/supprimer.php" method=post>
						<input type="hidden" name="evenement" value='.$reponse['evenement_id'].'>
						<input type="submit" class="btn teal" value="Supprimer">
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