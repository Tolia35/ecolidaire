<?php
require_once __DIR__ . "/model/database.php";

//Récupérer les données du formulaire

$label = $_POST["label"];

// Envoyer les données à la base de données
insertCategory($label);

// Rediriger l'user
header("Location: index.php");