<?php 
// Hachage du mot de passe
$pass_hache = md5(htmlspecialchars($_POST['mdp']));
$mail = htmlspecialchars($_POST['mail']);

// Vérification des identifiants
require "pdo.php";

$req = $bdd->prepare('SELECT etudiant_id FROM etudiants WHERE mail = :mail AND mdp = :mdp');
$req->execute(array(
    'mail' => $mail,
    'mdp' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['etudiant_id'];
    $_SESSION['pseudo'] = $mail;
    echo 'Vous êtes connecté !</br>';
}

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
   header("Location:../profil.php");
}
        ?>
