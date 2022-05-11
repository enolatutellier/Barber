<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $con->prepare('DELETE FROM '.$_POST["table"].'
                          WHERE Nom = \''.$_POST['nom'].'\'');
    $sql->execute();
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
