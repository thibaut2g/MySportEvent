<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>MySportEvent</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
</head>
<body>
 <nav class="transparent navbar-fixed indigo darken-3" role="navigation" id="scroll">
  <a id="logo-container" href="#" class="brand-logo scrollspy"><span>MySportEvent</span></a>
    <div class="nav-wrapper container">
      
      
      <ul class="right hide-on-med-and-down">
              <?php if (!isset($_SESSION['id']) OR !isset($_SESSION['pseudo']))
                      {
                         echo '<li><a href="accueil.php">Accueil</a></li>';
                      } ?>
              <?php if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                      {
                         echo '<li><a href="profil.php">Profil</a></li>';
                      } ?>
              <?php if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                      {
                         echo '<li> <a href="proposer.php">Proposer</a> </li>';
                      } ?>              
              <li><a href="#">Rechercher</a></li>
              
              
              
              <li><a href="about.php">A propos</a></li>

      </ul>

      <ul class="side-nav">
              <li><a href="#/photo.php">Rechercher</a></li>
              <li> <a href="#/photo.php">Proposer</a> </li>
              <li><a href="#">Profil</a> </li>
              <li><a href="#/about.php">A propos</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
  <main>

