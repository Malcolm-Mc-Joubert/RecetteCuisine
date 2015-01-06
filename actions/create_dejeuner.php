<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=joubert', 'joubert', 'php');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}





$req = $bdd->prepare('INSERT INTO dejeuner (login, nom, commentaire, icon) VALUES(:login,:nom, :commentaire, :date, :icon)');
$req->execute(array(
    'login' => $_POST['login'],
    'nom' => $_POST['nom'],
    'commentaire' => $_POST['commentaire'],
    'date' => $_POST['date'],
    'icon' => $_POST['icon']
));

echo 'La ligne a bien été ajouté !';
header('Location: list_dejeuner.php');
?>