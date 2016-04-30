<?php
		require 'pdo.php';
		$req = $bdd->query('SELECT evenement_id,nom_evenement,informations, DATE_FORMAT(date_evenement,"%d %m %y") as date, image FROM evenements');
		while ($reponse=$req->fetch()){
			echo '<div class="col s12">
		          <div class="card">
		            <div class="card-image">
		              <img src="'.$reponse['image'].'">
		              <span class="card-title">'.$reponse['nom_evenement'].'</span>
		            </div>
		            <div class="card-content">
		              <p>'.$reponse['informations'].'</p>
		            </div>
		            <div class="card-action">
		              <a href="#">Voir</a><p class="right">'.$reponse['date'].'</p>
		            </div>
		          </div>
		        </div>';
		}
	?>
