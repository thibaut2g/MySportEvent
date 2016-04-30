<?php 
    require 'fonction/pdo.php';
    $id=$_POST['evenement'];
    if (isset($_POST['modifier'])) { 
      $bdd->query('UPDATE evenements SET nom_evenement = "'.htmlspecialchars($_POST['titre']).'" WHERE evenement_id='.$id);
      $bdd->query('UPDATE evenements SET informations = "'.htmlspecialchars($_POST['texte']).'" WHERE evenement_id='.$id);
      header("Location:profil.php");
    }
 ?>
 <div class="container">

		<?php
		$req = $bdd->query('SELECT * FROM evenements WHERE evenement_id='.$id);
		$resultat=$req->fetch();

		 ?>

		 <form class="col s12" method=post>
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
			      <label for="icon_prefix2">Contenu</label>
			      <br><br/>
            <input class="large btn-large" type="submit" value="Modifier" />
			  		<a href="profil.php" class="waves-effect waves-light btn btn-large right">Annuler</a>
			    </div>
			</div>
      <input type="hidden" name="modifier" value="true">
      <input type="hidden" name="evenement" value=<?php echo $id; ?>>
		</form>

</div>