<?php 
function getAllVelos(){
    include('model/bdd.php');
    $reponse = $bdd->query('SELECT * FROM bikes');
    return $reponse;
}

function getVelo($id){
    include('model/bdd.php');
    $reponse = $bdd->prepare('SELECT * FROM bikes WHERE bike_id = ?');
    $reponse->execute(array($id));
    $velo = $reponse->fetch();
    return $velo;
}

function getAllImages($id){
    include('model/bdd.php');
    $reponse = $bdd->prepare('SELECT * FROM photos WHERE bike_id = ?');
    $reponse->execute(array($id));
    $imgs = $reponse->fetchAll();
    return $imgs;
}

function getLastVelo(){
    include('model/bdd.php');
    $reponse = $bdd->query('SELECT * FROM bikes ORDER BY bike_id DESC LIMIT 1');
    $velo = $reponse->fetch();
    return $velo;
}