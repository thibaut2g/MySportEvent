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

		<div class="col s12 l6 center-align">
			  <ul class="collapsible" data-collapsible="expandable">
			    <li>
			      <div class="collapsible-header flow-text indigo darken-3 white-text waves-effect waves-light">Connexion</div>
			      <div class="collapsible-body">
				      <form class="col s12" action="fonction/verifie.php" method="post">
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="pseudo" type="text" class="validate" name="pseudo">
					          <label for="pseudo">Pseudo</label>
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
				      <form class="col s12">
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="pseudo" type="text" class="validate">
				          <label for="pseudo">Pseudo</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="password" class="validate">
				          <label for="password">Password</label>
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
				<p class="flow-text scrollspy" id="texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod asperiores repudiandae, eum nemo voluptas dolores, at est similique, debitis dicta minus suscipit dolorum modi! Esse iste ipsam excepturi sed aliquid!</p>
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/banniere3.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
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