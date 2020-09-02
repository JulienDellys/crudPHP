<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription Apprenants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

        <?php

        if ($_SERVER['REQUEST_METHOD'] != 'POST'){
            echo 'allez vers <a href="index.php">le formulaire</a>';
        }else{

        $pseudo = (isset($_POST['pseudo'])) ? htmlspecialchars($_POST['pseudo'], ENT_QUOTES) : null;
        $email = (isset($_POST['email'])) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : null;
        $password = (isset($_POST['password'])) ?  password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
    
        require('db.php');

        /*
        $dbh = new PDO('mysql:host=localhost;dbname=projet', $user, $password_db);
        foreach($dbh->query('SELECT * from users') as $row) {
            echo ($row['speudo'].'<br>');
            echo ($row['mail'].'<br>');
            echo ($row['passwd']);
        }        
        //*/
        //*
        $requete="INSERT INTO users(speudo,mail,passwd) VALUES ('$pseudo','$email','$password')";
        echo $requete;
        $result = $connexion->query($requete);

        if(!$result){
            echo "insertion impossible";
        }else{
            echo "utilisateur enregistré";
        }
        //*/
        }
        ?>

        <?php if(isset($_POST['pseudo'])){?>
            <p>Merci <?php echo $pseudo ?>, tu est bien enregistré avec comme mail "<?php echo $_POST['email']; ?>" Un mail de conformation viens d'être envoyé <?php echo $password ?></p>
        <?php }else{ ?>
            <p>Et Connard, passe par le formulaire</p>
        <?php } ?>
    </div>
</body>
</html>
