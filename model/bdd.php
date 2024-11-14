<?php

try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=smartbike;charset=utf8', 'root', '');
   // echo "connextion bdd OK";
}
catch(Exception $e)
{
    echo $e;
} 