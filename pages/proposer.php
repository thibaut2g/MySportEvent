	<div class="container" >
		<div class="row " style="margin-bottom:0%">

			<form class="col s12">
					<div class="top"></div>
			      <div class="row">
			      <h1 class="white-text center z-depth-2 indigo darken-3">Nouvel événement </h1>
			        <div class="input-field col s6">
			          <input id="titre" type="text" class="validate">
			          <label for="titre">Titre</label>
			        </div>
			        <br><br/> <br><br/>
			        <div class="input-field col s12">
			          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			          <label for="icon_prefix2">Description</label>
			          <br><br/>
			        </div>
			        <div class="col s3">
				  			<label for="date">Date</label>
				  			<input id="date" type="date" class="datepicker">
				  			<br><br/> 
				  			<label for="time">Heure</label>
				  			<input id="time"  type="time">
				  	</div>
				  	
				  		<div class="col s12">
				  		<br><br/> 
				  		<label for="icon_prefix2">Discipline sportive</label>
						<p>
					      <input name="group1" type="radio" id="test1" />
					      <label for="test1">Running</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="test2" />
					      <label for="test2">Football</label>
					    </p>
					     <br><br/>
			        </div>
			       
			        <div class="col s12">
			        <label for="icon_prefix2">Nombre maximal de joueurs</label>
			        	<p class="range-field">
      						<input type="range" id="test5" min="0" max="50" />
    					</p>
    					<br><br/>
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
					      <br><br/>
					    </div>
					</div>
				    </div>		      	
				    <input class="large btn-large indigo darken-3" type="submit" value="Je créé mon événement !" style="margin-bottom: 3%;" />
			      </div>

			</form>
		</div>
	</div>