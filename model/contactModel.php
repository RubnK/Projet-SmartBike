<?php

function envoyerContact($nom, $prenom, $email, $message) {
    include('bdd.php');
    $req = $bdd->prepare('INSERT INTO contact(lastname, firstname, email, message) VALUES(:nom, :prenom, :email, :message)');
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'message' => $message
    ));
}
