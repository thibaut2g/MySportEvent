<div class="top"></div>
<h1 class="white-text center z-depth-2 indigo darken-3">Rechercher un événenement </h1>
<div class="container">

  <div class="row">
    <form class="col s8 offset-s2" method=post>
      <div class="row">
        <div class="input-field col s8">
          <input type="text" name="recherche" id="textarea1" class="materialize-textarea" value=<?php if (isset($_POST['action'])) {
  		echo $_POST['recherche'];
  	} ?>>
          <label for="textarea1"></label>
        </div>
     
      <div class="col s4">
      	<input type="hidden" name="action" value="true">
      	<input  class="large btn-large indigo darken-3"  type="submit" value="Rechercher">
      </div> </div>
    </form>
  </div>
  <div class="row">
  	<?php if (isset($_POST['action'])) {
  		require 'fonction/recherche.php';
  	} ?>
  </div>
  </div>

