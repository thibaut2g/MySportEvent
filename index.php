<?php

$monUrl = htmlspecialchars($_SERVER['REQUEST_URI']);
$monUrl=str_replace ('/MySportEvent' ,'' ,$monUrl);
	require "pages/header.php";
	if ($monUrl=="/") {
		require "pages/accueil.php";
	}else{
		$monUrl="pages".$monUrl;
		$lien=explode("?",$monUrl);
		if (file_exists($lien[0])){
			require $lien[0];
		}else{
			require "pages/erreur.php";
		}
	}
	require "pages/footer.php";
