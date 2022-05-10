<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $con->prepare('INSERT INTO '.$_POST["type"].'(Nom,Description)
                          VALUES(:nom, :description)');
    $sql->bindParam(':nom', $_POST['nom']);
    $sql->bindParam(':description', $_POST['description']);
    $sql->execute();
    header('Location:compte.php');
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}