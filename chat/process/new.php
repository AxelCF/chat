<?php
include 'pdo.php';
$req = $bdd->prepare('INSERT INTO utilisateur (pseudo, password, email) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['password'], $_POST['email']));

header('Location ../index.php');



?>