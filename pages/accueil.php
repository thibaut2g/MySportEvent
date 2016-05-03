<?php if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
          {
           header("Location:profil.php");
          } ?>
<style>
	main{		
		  background: url("img/banniere2.jpg") #9fa8da no-repeat top center;
		  background-size: 100%;
	}
</style>

<div class="top2"></div>
<a href="#texte" class="waves-effect waves-light btn orange" style="position:absolute;top:17%;right:5%">derniers Events !!</a>		
<div class="top"></div>


<div class="container">
	<div class="row">
			<div class="col s12 m6">
		<?php 
         if (isset($_GET['connexion'])) {
         	if ($_GET['connexion']=='erreur_connexion') {
         		echo '<p class="flash z-depth-2 flow-text">Mauvais identifiant ou mot de passe</p>';
         	}
         	elseif ($_GET['connexion']=='erreur_inscription') {
         		echo '<p class="flash z-depth-2 flow-text">Adresse mail déjà existante</p>';
         	}
         	elseif ($_GET['connexion']=='erreur_incomplet') {
         		echo '<p class="flash z-depth-2 flow-text">Les données saisies sont incomplètes !</p>';
         	}
          }  ?>
          </div>
	</div>

	<div class="row">
		<div class="col s12 l6 center-align">
			  <ul class="collapsible" data-collapsible="expandable">
			    <li>
			      <div class="collapsible-header flow-text indigo darken-3 white-text waves-effect waves-light">Connexion</div>
			      <div class="collapsible-body">
				   		<form class="col s12" action="fonction/connexion.php" method="post">
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="mail" type="email" class="validate" name="mail">
					          <label for="pseudo">Mail</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="password" type="password" class="validate" name="mdp">
					          <label for="password">Password</label>
					        </div>
					      </div>
					      <input class="large btn-large indigo darken-3" type="submit" value="Ok !" />
				    	</form>
				    </div>
			    </li>
			  </ul>	
		</div>

		<div class="col s12 l6 center-align">
			<ul class="collapsible" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header flow-text indigo darken-3 white-text waves-effect waves-light">Inscription</div>
			      <div class="collapsible-body">
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
			    </li>
			  </ul>
		</div>

	</div>
	<div class="top3"></div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12 center-align">
			<div class="top"></div>
			<div class="top"></div>
			<div class="top"></div>
				<p class="flow-text scrollspy" id="texte">LThibaut petite caisse</p>
				  <?php require 'fonction/afficher_evenement.php'; ?>
				<div class="top"></div>
	</div>
					</div>
					</div>
				</div>


<script>
	$(document).ready(function(){
	    $('.collapsible').collapsible({
	      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	    });
	  });

	 $(document).ready(function(){
	    $('.scrollspy').scrollSpy();
	  });
</script>