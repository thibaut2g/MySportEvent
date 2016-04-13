<?php include "header.php" ?>
	<div class="container">
		<div class="row">

			<form class="col s12">
					<div class="top"></div>
			      <div class="row">
			      	<div class="col s12">
						<p>
					      <input name="group1" type="radio" id="test1" />
					      <label for="test1">Running</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="test2" />
					      <label for="test2">Football</label>
					    </p>
			        </div>

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
				  			 <input id="date" type="date" class="datepicker">
				  	</div>	
			      </div>
		      	<input class="large btn-large indigo darken-3" type="submit" value="Ok !" />
			</form>
		</div>
	</div>
<?php include "footer.php" ?>