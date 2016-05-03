
	<div class="top"></div>
	<div class="container">
		<h1>A propos</h1>
		<hr>
		<p class="flow-text">Dans le cadre de notre projet informatique de 3eme année nous avons mis en place cette Application Web.</p>
    <p class="flow-text">Elle a pour but de mettre en relation les étudiants sportifs de la ville de Lille. </p> 
    <p class="flow-text">

Grâce à cette interface les utilisateurs pourront facilement trouver des partenaires qui les accompagneront dans leurs activités sportives.</p> 
    <p class="flow-text">
Pour cela l'application permet de créer des événements concernant le football ou la course à pied. On pourra voir les dernières actualités et événements sportifs et y rejoindre d'autres étudiants.
</p> 


</p>
	
<style>
	main{
		background: #9fa8da;
	}
</style>

<div class="top"></div>
<?php 
          if (isset($_POST['contact'])) { 
            $nom=$_POST['nom'];
            $objet=$_POST['objet'];
            $message=$_POST['message'];
            $email=$_POST['mail'];
            $mail= mail( "thibs2g@gmail.com" , $objet , $message);
              if($mail){
                echo '<div class="center"><p class="flow-text">Votre message a bien été envoyé !</p></div>';}else{
                echo '<div class="flash center"><p class="flow-text">Erreur, votre message n\'est pas parti ..</p></div>';
                  }
          } ?>
 <form class="col s12 m7 " method=post>
            <div class="row">
                <h5 class="center">Prenez le temps de remplir le formulaire de contact, nous reviendrons vers vous dans les plus brefs délais</h5>
                
                <div class="input-field col s6">
                  <input id="nom" type="text" name="nom">
                  <label for="nom">Nom</label>
                </div>
                <div class="input-field col s6">
                  <input id="mail" type="email" name="mail" class="validate">
                  <label for="mail">Email</label>
                </div>
                <div class="input-field col s6">
                  <input id="objet" type="text" name="objet">
                  <label for="objet">Objet</label>
                </div>
                <br><br/> <br><br/>
                <div class="input-field col s12">
                  <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">Message</label>
                  <br><br>
                  <input class="large btn-large" type="submit" value="Envoyer" /><br>
                </div>
              </div>
              <input type="hidden" name="contact" value="true">
      </form>
 </div>