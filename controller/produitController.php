<?php 
include_once('model/velosModel.php');
$velo = getVelo($_GET['velo']);
$images = getAllImages($_GET['velo']);
include_once('view/produit.php');