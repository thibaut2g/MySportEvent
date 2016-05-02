<?php 
// Hachage du mot de passe
$pass_hache = md5(htmlspecialchars($_POST['mdp']));
$mail = htmlspecialchars($_POST['mail']);

// Vérification des identifiants
require "pdo.php";

$req = $bdd->prepare('SELECT etudiant_id, prenom FROM etudiants WHERE mail = :mail AND mdp = :mdp');
$req->execute(array(
    'mail' => $mail,
    'mdp' => $pass_hache));

$resultat = $req->fetch();
$prenom=$resultat['prenom'];
if (!$resultat)
{
    header("Location:../accueil.php?connexion=erreur_connexion");
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['etudiant_id'];
    $_SESSION['mail'] = $mail;
    $_SESSION['pseudo'] = $mail;
    $_SESSION['prenom'] = $prenom;
    echo 'Vous êtes connecté !</br>';
}

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
   header("Location:../profil.php");
}
        ?>
