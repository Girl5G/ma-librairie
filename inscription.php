<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="../revision/exercice_web/css/inscription.css">

</head>
<body>
    <form action="traitement.php" methode="POST">
        <label for="nom">nom*</label> <br>
        <input type="text" name="nom" id="nom" required> <br>
        <label for="prenom">prenom</label> <br>
        <input type="text" name="prenom" id="prenom" required> <br>
        <label for="email">email</label> <br>
        <input type="text" name="email" id="email" required> <br>
        <label for="password">password</label> <br>
        <input type="password" name="pass" id="pass" required> <br> <br>
        <input type="submit" value="m'inscrire" id="ok">
    </form>
</body>
</html>