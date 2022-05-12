<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$sql = $con->prepare('UPDATE '.$_POST["table"].'
                          SET Nom = \''.$_POST['nom'].'\', Description = \''.$_POST['description'].'\', Photo = \''.$_POST['photo']']
                          WHERE Nom = \''.$_POST['oldName'].'\'');
    $sql->execute();  */
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $table = $_POST["table"];
    $oldName = $_POST["oldName"];
    $description = htmlspecialchars(stripslashes($description));
    $nom = htmlspecialchars(stripslashes($nom));
    $table = htmlspecialchars(stripslashes($table));
    if(isset($_FILES['photo'])){
        $photo = $_FILES['photo'];
        if(is_uploaded_file($photo['tmp_name'])){
            $sql = $con->prepare("UPDATE $table
                                  SET   Nom = :nom,
                                        Description = :description,
                                        Photo = :photo
                                  WHERE Nom = :oldName");
            $sql -> bindParam(':nom', $nom);
            $sql -> bindParam(':description', $description);
            $sql -> bindParam(':photo', $photo['name']);
            $sql -> bindParam(':oldName', $oldName);
            $sql->execute();
            move_uploaded_file($photo['tmp_name'], 'img/'.$photo['name']);
            echo $oldName;
        }else{
            echo 'fichier dangereux ?';
        }
    }
    else{
        $photo = $_POST['photo'];
        $sql = $con->prepare("UPDATE $table
                                  SET   Nom = :nom,
                                        Description = :description,
                                        Photo = :photo
                                  WHERE Nom = :oldName");
            $sql -> bindParam(':nom', $nom);
            $sql -> bindParam(':description', $description);
            $sql -> bindParam(':photo', $photo['name']);
            $sql -> bindParam(':oldName', $oldName);
            $sql->execute();
            echo $oldName;
    };
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
