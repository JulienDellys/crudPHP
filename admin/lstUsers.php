<?php

require('./../db/dbConnect.php');
$req = "SELECT Id, speudo, mail FROM users";
// $ressult1 = $dbconnexion -> query($req);

/*
foreach ($dbconnexion->query($req) as $row){
    echo $row['pseudo'] . "<br>";
    echo $row['email'] . "<br> <hr>";
    // print $row['password'] . "<br>";
}
//*/

$sth = $dbconnexion-> prepare($req);
$sth-> execute();

print("Récupération de toutes les lignes d'un jeu de résultats :\n");
echo '<br>';
$result = $sth->fetchAll();
foreach ($result as $row){
    echo $row['Id'] . "<br>";
    echo $row['speudo'] . "<br>";
    echo $row['mail'] . "<br> <hr>";
}
