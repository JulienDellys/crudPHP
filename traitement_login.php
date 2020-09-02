<?php 

$pseudo = valid_donnees($_POST['pseudo']);
$email = valid_donnees($_POST['email']);
$password = valid_donnees(password_hash($_POST['password'],PASSWORD_DEFAULT));

function valid_donnees($mesdonnees){
    $mesdonnees = trim($mesdonnees);
    $mesdonnees = stripslashes($mesdonnees);
    $mesdonnees = htmlspecialchars($mesdonnees);
    return $mesdonnees;
}
if(!empty($pseudo) <=20 && preg_match("/^[A-Za-z'-]+$/",$pseudo)&& !empty($email)&& filter_var($email,FILTER_VALIDATE_EMAIL)){
    require("./db/dbConnect.php");
    /*
    $dbconnexion = new PDO("mysql:host=$server; dbname=$dbname",$user,$password_db);
    $dbconnexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //*/
    $sth=$dbconnexion->prepare("INSERT INTO users(speudo,mail,passwd)VALUES(:pseudo,:email,:password)");
    $sth->bindParam(':pseudo',$pseudo);
    $sth->bindParam(':email',$email);
    $sth->bindParam(':password',$password);
    $sth->execute();
    
    try{
    }
    catch(PDOException $e){
        echo "Erreur de traitement des données: " .$e->getMessage();
    }
}else{
    header("Location: Inscription.html");
}

?>