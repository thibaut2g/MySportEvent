<?php 
		require 'pdo.php';
		$titre_evenement_new=$_POST['titre'];
		$texte_evenement_new=$_POST['texte'];
		$image=htmlspecialchars($_FILES['img']['name']);
		
		if ($image !== ''){
	        $upload1 = upload('img','../img/'.$image,FALSE,FALSE);
	        if ($upload1 !== FALSE AND $image !== ''){
	          $im_name = "img/".$image;
	        }else{
	          $im_name = "img/mystere.jpg";
	        }
      	}else{
        $im_name = "img/mystere.jpg";
      	}


    $req = $bdd->prepare('INSERT INTO evenements(nom_evenement, informations, date_evenement, image) VALUES(:titre, :texte, NOW(), "'.$im_name.'")');
    $req->execute(array('titre' => $titre_evenement_new, 'texte' => $texte_evenement_new));  

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

	header("Location:../profil.php") ;
      
      
?>