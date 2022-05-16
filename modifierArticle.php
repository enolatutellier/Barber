<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $oldName = $_POST["oldName"];
    $description = htmlspecialchars(stripslashes($description));
    $nom = htmlspecialchars(stripslashes($nom));
    if(isset($_FILES['photo'])){
        $photo = $_FILES['photo'];
        if(is_uploaded_file($photo['tmp_name'])){
            $sql = $con->prepare("UPDATE articles
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
        $sql = $con->prepare("  UPDATE articles
                                SET Nom = :nom,
                                    Description = :description
                                WHERE Nom = :oldName");
            $sql -> bindParam(':nom', $nom);
            $sql -> bindParam(':description', $description);
            $sql -> bindParam(':oldName', $oldName);
            $sql->execute();
            echo $oldName;
    };
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
