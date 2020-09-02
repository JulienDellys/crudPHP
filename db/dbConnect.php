<?php 
require("db.php");

try{
    $dbconnexion = new PDO("mysql:host=$server; dbname=$dbname",$user,$password_db);
    $dbconnexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
        echo "Erreur de traitement des données: " .$e->getMessage();
}
