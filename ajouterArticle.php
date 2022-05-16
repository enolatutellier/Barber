<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $con->prepare('INSERT INTO '.$_POST["table"].'(Nom,Description,Photo)
                          VALUES(:nom, :description, :image)');
    $sql->bindParam(':nom', $_POST['nom']);
    $sql->bindParam(':description', $_POST['description']);
    $sql->bindParam(':image', $_FILES['photo']['name']);
    $sql->execute();
    move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$_FILES['photo']['name']);
    echo $_POST['nom'];
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}