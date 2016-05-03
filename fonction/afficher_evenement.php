<?php
		require 'pdo.php';
		$dateactuelle = date("d-m-Y");
		$datelimite = date("Y-m-d", strtotime("+15 day", strtotime($dateactuelle)));
		$req = $bdd->query('SELECT evenement_id,nom_evenement,informations, DATE_FORMAT(date_evenement,"%d %b %y") as date_evenement, image FROM evenements WHERE date_evenement BETWEEN "'.$dateactuelle.'" AND "'.$datelimite.'" ORDER BY date_evenement');
		while ($reponse=$req->fetch()){
			echo '<div class="col s6 ">
		          <div class="card">
		            <div class="card-image">
		              <img src="'.$reponse['image'].'">
		              <span class="card-title">'.$reponse['nom_evenement'].'</span>
		            </div>
		            <div class="card-content">
		              <p>'.$reponse['informations'].'</p>
		            </div>
		            <div class="card-action">
		              <a href="evenement.php?id='.$reponse['evenement_id'].'">Voir</a><p class="right">'.$reponse['date_evenement'].'</p>
		            </div>
		          </div>
		        </div>';
		}
	?>
