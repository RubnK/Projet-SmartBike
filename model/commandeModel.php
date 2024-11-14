<?php

function envoyerCommande($bike, $firstname, $lastname, $email, $message, $adresse){
    include('bdd.php');
    $req = $bdd->prepare('INSERT INTO orders(bike_id, firstname, lastname, email, adress, message) VALUES(:bike, :firstname, :lastname, :email, :adresse, :message)');
    $req->execute(array(
        'bike' => $bike,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'adresse' => $adresse,
        'message' => $message
    ));
}
