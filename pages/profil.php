<?php if (!isset($_SESSION['id']) OR !isset($_SESSION['pseudo']))
          {
             header("Location:erreur.php");
          } ?>
<div class="top4"></div>
<div class="row indigo lighten-2">
	<div class="col s6">
		<p class="flow-text">Hello <?php echo $_SESSION['prenom']; ?> !</p>
	</div>
	<div class="col s6 right-align">
			<form class="transparent" action="fonction/deconnexion.php" method=post>
				<br>
				<input class="large btn-large indigo darken-3" type="submit" value="Déconnexion" />
			</form>
	</div>
</div>
<div class="container">
	
	<br>
	<br>
<h3>Tes événements</h3><hr>
	
	<?php require 'fonction/modifier_evenement.php';?>
	<br><br>
<h3>Tu participes à </h3><hr>
	<?php require 'fonction/participe.php' ?>
	<div class="row center">
		<div class="col s6">
			<a href="rechercher.php" class="large btn-large indigo darken-3">Rechercher</a>
		</div>
		<div class="col s6">
			<a href="proposer.php" class="large btn-large indigo darken-3">Proposer</a>
		</div>
	</div>
</div>