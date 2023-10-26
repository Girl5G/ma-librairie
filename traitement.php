<?php
    $severname="localhost";
    $username="root";
    $password="root";


    try{
        $bdd= new PDO("mysql:host=$servername;bdname=utilisateur",$username, $password);
        $bdd->setAttribut(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXECPTION);
    }
    catch(PDOExecption $e){
        echo "erreur :".$e->getMessage();
    }
    if(isset($_POST['ok'])){
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $email= $_POST['email'];
        $mot_de_passe= $_POST['pass'];
        
        requete=$bdd->prepare("INSERT INTO users value(0,:nom,:prenom,:email,:mot_de_passe)");
        $requete=execute(
            array(
                "nom"=>$nom,
                "prenom"=>$prenom,
                "email"=>$email,
                "mot_de_passe"=>$mot_de_passe
            )
            );
            echo "inscription reussie!"
    }


?>