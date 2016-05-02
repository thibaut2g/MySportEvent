<?php 
    require 'pdo.php';
    $titre=htmlspecialchars($_POST['titre']);
	$texte=htmlspecialchars($_POST['texte']);
	$date= htmlspecialchars($_POST['date']);
	$heure=htmlspecialchars( $_POST['heure']);
	$sport=htmlspecialchars( $_POST['sport']);
	$nbmax= htmlspecialchars($_POST['nbmax']);
	$image=htmlspecialchars($_FILES['img']['name']);
    $id=$_POST['evenement'];
    if ($image !== ''){
	        $upload1 = upload('img','../img/'.$image,FALSE,FALSE);
	        if ($upload1 !== FALSE AND $image !== ''){
	          $im_name = "img/".$image;
	          $bdd->query('UPDATE evenements SET image = "'.$im_name.'" WHERE evenement_id='.$id);
	        }else{
	    		$bdd->query('UPDATE evenements SET image = "euh" WHERE evenement_id='.$id);} 
	        }
	  if ($date !== ''){
	          $bdd->query('UPDATE evenements SET date_evenement = "'.$date.'" WHERE evenement_id='.$id);
	        }
     $req=$bdd->prepare('UPDATE evenements
					SET nom_evenement = :titre,
					    informations = :texte,
					    heure_evenement = :heure,
					    type_sport = :sport,
					    nbjoursmax = :nbmax
					    WHERE evenement_id='.$id);

	$req->execute(array('titre' => $titre, 'heure' => $heure, 'sport' => $sport, 'texte' => $texte, 'nbmax' => $nbmax));  


      header("Location:../profil.php");

      function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE){
		$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
		if ( in_array($extension_upload,$extensions_valides) ){
			//Test1: fichier correctement uploadé
		     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
		   //Test2: taille limite
		     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
		   //Test3: extension
		     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
		     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
		   //Déplacement
		     return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);

		}
	}
  
 ?>