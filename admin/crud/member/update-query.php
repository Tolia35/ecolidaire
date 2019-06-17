<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

// Récupérer les données du formulaire
$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname =$_POST["lastname"];

// Envoyer les données à la base de données
updateMember($id, $firstname, $lastname);

// Rediriger l'user
header("Location: index.php");
