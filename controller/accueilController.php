<?php
include_once('model/velosModel.php');
$lastVelo = getLastVelo();
$velo = getVelo($lastVelo['bike_id']);
$images = getAllImages($lastVelo['bike_id']);
include_once('view/accueil.php');