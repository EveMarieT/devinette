<?php
include_once('_config.php');

$id = $_GET['id'];

/** Accés au model ***/

$bdd = new PDO("mysql:host=localhost; dbname=devinette; charset=utf-8", "root", "root");

$query = "DELETE FROM devinette WHERE id= :id";

$req = $bdd->prepare($query);
$req->bindValue(':id, $id, PDO::PARAM_INT');

$req->execute();

header("location: index.php");
exit;

;?>
