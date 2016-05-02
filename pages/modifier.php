 <div class="container">

		<?php
		require "fonction/pdo.php";
		$id=$_POST['evenement'];
		$req = $bdd->query('SELECT * FROM evenements WHERE evenement_id='.$id);
		$resultat=$req->fetch();
		 ?>

		 <form class="col s12" action="fonction/modification.php" method=post enctype="multipart/form-data">
      		<div class="top"></div>
			<div class="top"></div>
			<div class="row">
			  <h1 class="white-text center z-depth-2 indigo darken-2">Modifier evenement</h1>
			    <div class="input-field col s6">
			      <input id="titre" type="text" name="titre" value=<?php echo '"'.$resultat['nom_evenement'].'"' ?>>
			      <label for="titre">Titre</label>
			    </div>
			    <br><br/> <br><br/>
			    <div class="input-field col s12">
			      <textarea id="icon_prefix2" name="texte" class="materialize-textarea"><?php echo $resultat['informations']; ?></textarea>
			      <label for="icon_prefix2">Description</label>
			      <br><br/>
			     </div>
			    <div class="col s3" >
				  	<label for="date">Date</label>
				  	<input id="date" type="date" name="date" class="datepicker" />
				  	<br><br/> 
				  	<label for="time">Heure</label>
				  	<input id="time" name="heure" type="time" value=<?php echo $resultat['heure_evenement']; ?>>
				</div>
				<div class="col s12">
				  		<br><br/> 
				  		<label for="icon_prefix2">Discipline sportive</label>
						<p>
					      <input name="sport" type="radio" id="test1" value="running" <?php if ($resultat['type_sport']=='running') {
					      	echo "checked";
					      } ?> />
					      <label for="test1">Running</label>
					    </p>
					    <p>
					      <input name="sport" type="radio" id="test2" value="football" <?php if ($resultat['type_sport']=='football') {
					      	echo "checked";
					      } ?> />
					      <label for="test2">Football</label>
					    </p>
					     <br><br/>
			        </div>
			        <div class="col s12">
			        	<label for="icon_prefix2" >Nombre maximal de joueurs</label>
			        	<p class="range-field">
      						<input type="range" id="test5" name="nbmax" min="0" max="50" value= <?php echo $resultat['nbjoursmax']; ?> />
    					</p>
    					<br><br/>
			        </div>
			       	<div class="col s12">
			        <label for="icon_prefix2">Photo de l'événement</label>
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>Je choisis ma photo</span>
					        <input type="file" name="img">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					      <br><br/>
					    </div>
					</div>
			</div>
			<div class="row">
				<div>
            		<input class="large btn-large" type="submit" value="Modifier" />
			  		<a href="profil.php" class="waves-effect waves-light btn btn-large right">Annuler</a>
			    </div>
			</div>
      		<input type="hidden" name="evenement" value=<?php echo $id; ?>>
		</form>

</div>