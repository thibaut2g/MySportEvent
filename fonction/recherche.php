<?php
	require "pdo.php";
	$dateactuelle = date("d-m-Y");
	$datelimite = date("Y-m-d", strtotime("+360 day", strtotime($dateactuelle)));
	$recherche=htmlspecialchars($_POST['recherche']);
	$req = $bdd->query('SELECT * FROM evenements WHERE nom_evenement LIKE "%'.$recherche.'%" OR informations LIKE "%'.$recherche.'%" AND date_evenement BETWEEN "'.$dateactuelle.'" AND "'.$datelimite.'" ORDER BY date_evenement');
	$a=0;
	while ($reponse=$req->fetch()){
			echo '<div class="col s6">
		          <div class="card">
		            <div class="card-image">
		              <img src="'.$reponse['image'].'">
		              <span class="card-title">'.$reponse['nom_evenement'].'</span>
		            </div>
		            <div class="card-content">
		              <p>'.$reponse['informations'].'</p>
		            </div>
		            <div class="card-action">
		              <a  href="evenement.php?id='.$reponse['evenement_id'].'">Voir</a><p class="right">'.$reponse['date_evenement'].'</p>
		            </div>
		          </div>
		        </div>';
		        $a++;
		}
	if ($a==0) {
		echo '<p class="flow-text center">Nous n\'avons rien trouvé</p>' ;
	}
?>

