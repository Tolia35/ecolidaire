<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

// Récupérer les données du formulaire
$id = $_POST["id"];
$pseudo = $_POST ["pseudo"];
$email = $_POST ["email"];
$admin = $_POST ["admin"];



// Envoyer les données à la base de données
updateUser($id, $pseudo, $email, $admin);

// Rediriger l'user
header("Location: index.php");