<div class="top"></div>
<?php if (!isset($_SESSION['id']) OR !isset($_SESSION['pseudo']))
          {
             echo 'Il faut d\'abord t\'inscrire avant de participer';die();
          } ?>

<?php
		$id=$_GET['id'];
		require 'fonction/pdo.php';
		$req = $bdd->query('SELECT evenement_id,nom_evenement,informations, date_evenement, image FROM evenements WHERE evenement_id='.$id);
		$reponse=$req->fetch()
	?>

<h3>Tu peux participer à l'événement </h3><h2><?php echo $reponse['nom_evenement']; ?></h2>

<form class="transparent" action="fonction/participer.php" method=post>
		<input type="hidden" name="evenement" value=<?php echo $reponse['evenement_id']; ?>>
		<input type="submit" class="btn"  value="Participer">
</form>