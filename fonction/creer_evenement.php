<?php 
	require 'pdo.php';
	$titre=htmlspecialchars($_POST['titre']);
	$texte=htmlspecialchars($_POST['texte']);
	$date= htmlspecialchars($_POST['date']);
	$heure=htmlspecialchars( $_POST['heure']);
	$sport=htmlspecialchars( $_POST['sport']);
	$nbmax= htmlspecialchars($_POST['nbmax']);
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
   

		
	$req = $bdd->prepare('INSERT INTO evenements(nom_evenement,date_evenement,heure_evenement, type_sport,informations,nbjoursmax,image) VALUES(:titre, :date, :heure, :sport, :texte, :nbmax, :im_name)');

	$req->execute(array('titre' => $titre, 'date' => $date, 'heure' => $heure, 'sport' => $sport, 'texte' => $texte, 'nbmax' => $nbmax, 'im_name' => $im_name));  


	header("Location:../profil.php") ;


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