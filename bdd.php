<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$data = $bdd->prepare("SELECT * FROM film, photo");
$data->execute();
$getData = $data->fetchAll();

$data2 = $bdd->prepare("SELECT nom,prenom,date_de_naissance,biographie ,chemin,legende FROM photo, personne");
$data2->execute();
$getData2 = $data2->fetchAll();


?> 