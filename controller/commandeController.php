<?php 
include_once('model/velosModel.php');
$velos = getAllVelos();
include_once('view/commander.php');

if(isset($_POST['nom'])){
    include_once('model/commandeModel.php');
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $velo = $_POST['velo_id'];
    $message = $_POST['message'];
    envoyerCommande($velo, $prenom, $nom, $email, $message, $adresse);
}