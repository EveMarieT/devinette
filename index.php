<?php
include_once('_config.php');

MyAutoload::start();

$request = $_GET['r']; // index.php?r=contenupassé

$routeur = new Routeur($request);
$routeur->renderController();




