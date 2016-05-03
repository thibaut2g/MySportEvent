<div class="top4"></div>

<?php if (!isset($_SESSION['id']) OR !isset($_SESSION['pseudo']))
          {  ?>
		<div class="container">
			<div class="row">
				
	          <div class="col s12 l6 offset-l3 center-align">
	          		<p class="flow-text">Il faut d'abord t'inscrire avant de participer</p>
	          				<h3>Inscription</h3><hr>
	                      <form class="col s12" action="fonction/inscription.php" method=post>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="nom" name="nom" type="text" class="validate">
	                          <label for="nom">Nom</label>
	                        </div>
	                        <div class="input-field col s12">
	                          <input id="prenom" name="prenom" type="text" class="validate">
	                          <label for="prenom">Prenom</label>
	                        </div>
	                        <div class="input-field col s12">
	                          <input id="datenaissance" name="datenaissance" type="date" class="validate datepicker">
	                          <label for="datenaissance">Date de naissance</label>
	                        </div>
	                        <div class="input-field col s12">
	                          <input id="ecole" name="ecole" type="text" class="validate">
	                          <label for="ecole">Ecole</label>
	                        </div>
	                        <div class="input-field col s12">
	                          <input id="mail" name="mail" type="email" class="validate">
	                          <label for="mail">Mail</label>
					        </div>
					        <div class="input-field col s12">
					          <input id="mdp" name="mdp" type="text" class="validate">
	                          <label for="mdp">Mot de passe</label>
					        </div>
					      </div>
					      <input class="large btn-large indigo darken-3" type="submit" value="Ok !" />
					    </form>
					    </div>
					    </div>
		</div>

             <?php require 'footer.php';die();
          } ?>

<?php
		if (isset($_GET['id'])) {
			if ($a=intval($_GET['id'])) {
				$id=intval($_GET['id']);
					$id=htmlspecialchars($id);
					require 'fonction/pdo.php';
					$req = $bdd->query('SELECT * FROM evenements WHERE evenement_id='.$id);
					$reponse=$req->fetch();
					if (isset($reponse['nom_evenement'])) {

						$etudiant_id=$_SESSION['id'];
						$req2 = $bdd->query('SELECT etudiant_id FROM participe WHERE etudiant_id='.$etudiant_id.' AND evenement_id='.$id);
						$req3 = $bdd->query('SELECT COUNT(*) FROM participe WHERE evenement_id='.$id);
						$nbjoueur=$req3->fetch();
						$nbplace= $reponse['nbjoursmax']-$nbjoueur['COUNT(*)'];
						if($req2->fetch()){ ?>
								<div class="top"></div>
								<div class="container">
									<div class="row">
										<h3><?php echo $reponse['nom_evenement']; ?></h3><hr>
										<p class="flow-text"><?php echo $reponse['informations']; ?></p>
										<div class="col s6">
											<p class="flow-text">Date : <?php echo $reponse['date_evenement']; ?></p>
											<p class="flow-text">Heure : <?php echo $reponse['heure_evenement']; ?></p>
											<p class="flow-text">Sport : <?php echo $reponse['type_sport']; ?></p>
											<p class="flow-text">Nombre de participants : <?php echo $nbjoueur['COUNT(*)']; ?></p>
											<p class="flow-text">Nombre de places restantes : <?php echo $nbplace; ?></p>
										</div>
										<div class="col s6">
											<img src="<?php echo $reponse['image']; ?>" alt="pas d'image" class="img1 z-depth-2">
										</div>
										<div class="col s12">
											<form class="transparent" action="fonction/participeplus.php" method=post>
												<input type="hidden" name="participe" value=<?php echo $reponse['evenement_id']; ?>>
												<input type="submit" class="btn"  value="ne plus participer">
											</form>
											<div class="row">
												<div class="top"></div>
										 		<div class="col s12 m6">
													<?php require 'fonction/commenter.php'; ?>
												</div>
												<div class="col s12 m6">
													<?php require 'fonction/participant.php' ?>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php }else{
					
	?>	
								<div class="top"></div>
								<div class="container">
									<div class="row">
										<h3><?php echo $reponse['nom_evenement']; ?></h3><hr>
										<p class="flow-text"><?php echo $reponse['informations']; ?></p>
										<div class="col s6">
											<p class="flow-text">Date : <?php echo $reponse['date_evenement']; ?></p>
											<p class="flow-text">Heure : <?php echo $reponse['heure_evenement']; ?></p>
											<p class="flow-text">Sport : <?php echo $reponse['type_sport']; ?></p>
											<p class="flow-text">Nombre de participants : <?php echo $nbjoueur['COUNT(*)']; ?></p>
											<p class="flow-text">Nombre de places restantes : <?php echo $nbplace; ?></p>
										</div>
										<div class="col s6">
											<img src="<?php echo $reponse['image']; ?>" alt="image" class="img1 z-depth-2">
										</div>
										<div class="col s12">
											<form class="transparent" action="fonction/participer.php" method=post>
												<input type="hidden" name="evenement" value=<?php echo $reponse['evenement_id']; ?>>
												<input type="submit" class="btn"  value="Participer">
											</form>
										</div>
									</div>
								</div>

<?php 		}		
				}else{ header("Location:erreur.php");}
			}else{ header("Location:erreur.php");}
		}else{ header("Location:erreur.php");}
