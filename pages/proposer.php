<?php include "header.php" ?>
	<div class="container">
		<div class="row">

			<form class="col s12">
					<div class="top"></div>
			      <div class="row">
			      <h1>Nouvel événement</h1>
			        <div class="input-field col s6">
			          <input id="titre" type="text" class="validate">
			          <label for="titre">Titre</label>
			        </div>

			        <div class="input-field col s12">
			          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			          <label for="icon_prefix2">Description</label>
			        </div>
			        
			        <div class="col s3">
				  			<label for="date">Date</label>
				  			 <input id="date" type="date" class="datepicker"><input  type="time" class="timepicker">
				  	</div>	
				  		<div class="col s12">
				  		<label for="icon_prefix2">Discipline sportive</label>
						<p>
					      <input name="group1" type="radio" id="test1" />
					      <label for="test1">Running</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="test2" />
					      <label for="test2">Football</label>
					    </p>
			        </div>
			        <div class="col s12">
			        <label for="icon_prefix2">Nombre maximal de joueurs</label>
			        	<p class="range-field">
      						<input type="range" id="test5" min="0" max="50" />
    					</p>
			        </div>
			        <div class="col s12">
			        <label for="icon_prefix2">Photo de l'événement</label>
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>Je choisis ma photo</span>
					        <input type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
				    </div>
			      </div>
		      	<input class="large btn-large indigo darken-3" type="submit" value="Ok !" />
			</form>
		</div>
	</div>
<?php include "footer.php" ?>