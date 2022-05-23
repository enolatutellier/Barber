<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $description = htmlspecialchars(stripslashes($description));
    $nom = htmlspecialchars(stripslashes($nom));
    if(isset($_FILES['photo'])){        
        if(preg_match('/image/', $_FILES['photo']['type'])){
            $photo = $_FILES['photo'];
            if(is_uploaded_file($photo['tmp_name'])){
                $sql = $con->prepare("UPDATE articles
                                    SET   Nom = :nom,
                                            Description = :description,
                                            Photo = :photo
                                    WHERE Id_article = :id");
                $sql -> bindParam(':nom', $nom);
                $sql -> bindParam(':description', $description);
                $sql -> bindParam(':photo', $photo['name']);
                $sql -> bindParam(':id', $_POST['id']);
                $sql->execute();
                move_uploaded_file($photo['tmp_name'], 'img/'.$photo['name']);
                echo $nom;
            }else{
                echo 'fichier dangereux ?';
            }
        }else{
            echo 'Le fichier n\'est pas une image. ';
            $sql = $con->prepare("  UPDATE articles
                                    SET Nom = :nom,
                                    Description = :description
                                    WHERE Id_article = :id");
            $sql -> bindParam(':nom', $nom);
            $sql -> bindParam(':description', $description);
            $sql -> bindParam(':id', $_POST['id']);
            $sql->execute();
            echo $nom;
        }
    }
    else{
        $sql = $con->prepare("  UPDATE articles
                                SET Nom = :nom,
                                    Description = :description
                                WHERE Id_article = :id");
            $sql -> bindParam(':nom', $nom);
            $sql -> bindParam(':description', $description);
            $sql -> bindParam(':id', $_POST['id']);
            $sql->execute();
            echo $nom;
    };
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}