<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

// Récupérer les données du formulaire
$id = $_POST["id"];
$title = $_POST["title"];
$price= $_POST["price"];
$category= $_POST["category"];
$picture= $_POST["picture"];
$date_start= $_POST["dateStart"];
$date_end= $_POST["dateEnd"];



// Envoyer les données à la base de données
updateProject($id, $title, $price, $category, $picture, $date_start, $date_end);

// Rediriger l'user
header("Location: index.php");