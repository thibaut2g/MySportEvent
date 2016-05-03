<?php
require "pdo.php";
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$datenaissance=htmlspecialchars($_POST['datenaissance']);
$ecole=htmlspecialchars($_POST['ecole']);
$mail=htmlspecialchars($_POST['mail']);
$pass_hache = md5(htmlspecialchars($_POST['mdp']));


 if ($nom!=='' and $prenom!=='' and $datenaissance!=='' and $ecole!=='' and $mail!=='' and $pass_hache!==''){
    $verifie = $bdd->query('SELECT nom FROM etudiants WHERE mail="'.$mail.'"');
    $verifie=$verifie->fetch();
    if ($verifie==false) {
        $req = $bdd->prepare('INSERT INTO etudiants(nom, prenom, datenaissance, ecole, mail, mdp) VALUES(:nom, :prenom, :datenaissance, :ecole, :mail, :mdp)');
        $req->execute(array('nom' => $nom, 'prenom' => $prenom, 'datenaissance' => $datenaissance, 'ecole' => $ecole, 'mail' => $mail, 'mdp' => $pass_hache));


        $req = $bdd->prepare('SELECT etudiant_id FROM etudiants WHERE mail = :mail AND mdp = :mdp');
    	$req->execute(array(
    	    'mail' => $mail,
    	    'mdp' => $pass_hache));

    	$resultat = $req->fetch();
        session_start();
        $_SESSION['id'] = $resultat['etudiant_id'];
        $_SESSION['mail'] = $mail;
        $_SESSION['pseudo'] = $mail;
        $_SESSION['prenom'] = $prenom;
        header('Location: ../profil.php');
        
    }else{
        header("Location:../accueil.php?connexion=erreur_inscription");
    }
}
else{
    header("Location:../accueil.php?connexion=erreur_incomplet");
}    

?>
