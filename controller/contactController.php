<?php

include_once('model/contactModel.php');
include_once('view/contact.php');
 

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])){
    include_once('model/contactModel.php');
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    envoyerContact($nom, $prenom, $email, $message);
}