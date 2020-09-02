<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement_login.php" name="form_login"  method="POST">
        <div>
            <label for="pseudo">Psuedo</label>
            <input type="text" name="pseudo" id="speudo" required placeholder="indiquez votre speudo">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required placeholder="indiquez votre email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required placeholder="indiquez votre mot de passe">
        </div>
        <div><button type="submit">J'envoie</button></div>
    </form>
</body>
</html>