<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id=$_POST['id'];
    echo $id;
    $sql = $con->prepare("  DELETE FROM articles
                            WHERE Id_article = :id");
    $sql -> bindParam(':id', $id);
    $sql->execute();
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
