<?php 
// Hachage du mot de passe
$pass_hache = sha1($_POST['mdp']);
$pseudo = $_POST['pseudo'];

// Vérification des identifiants
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND mdp = :mdp');
$req->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
	echo 'Vous êtes connecté !</br>';
}

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
   header("Location:../pages/profil.php");
}
		?>