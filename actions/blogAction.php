<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=chat', 'joubert', 'php');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO blog (login, message) VALUES(login,message,)');
$req->execute(array($_POST['pseudo'], $_POST['message']));
// Redirection du visiteur vers la page du minichat
header('Location: blogAction.php');
?>