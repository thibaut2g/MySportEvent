<?php if (!isset($_SESSION['id']) OR !isset($_SESSION['pseudo']))
          {
             header("Location:erreur.php");
          } ?>
<div class="top"></div>
Bravo tu es sur ta page de profil !!
<?php
echo $_SESSION['pseudo']; ?>
<br>
<br>
<form action="fonction/deconnexion.php" method=post>
	<input class="large btn-large indigo darken-3" type="submit" value="Déconnexion" />
</form>
<?php require 'fonction/modifier_evenement.php';?>