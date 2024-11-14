<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'velos':
        include_once('controller/velosController.php');
        break;
    case 'contact':
        include_once('controller/contactController.php');
        break;
    case 'commander':
        include_once('controller/commandeController.php');
        break;
    case 'produit':
        include_once('controller/produitController.php');
        break;
    default:
        include_once('controller/accueilController.php');
}