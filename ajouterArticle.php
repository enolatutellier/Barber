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
            
            $sql = $con->prepare('  INSERT INTO articles(Nom,Description,Photo, Id_categorie)
                                    VALUES(:nom, :description, :image,
                                    (SELECT Id_categorie 
                                    FROM categories 
                                    WHERE Nom = \''.$_POST['type'].'\'))');
            $sql->bindParam(':nom', $nom);
            $sql->bindParam(':description', $description);
            $sql->bindParam(':image', $_FILES['photo']['name']);
            $sql->execute();
            move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$_FILES['photo']['name']);
            echo 'L\'article '.$nom;
        }else{
            echo 'Le fichier n\'était pas une image. ';
            $sql = $con->prepare('  INSERT INTO articles(Nom,Description, Id_categorie)
                                    VALUES(:nom, :description,
                                    (SELECT Id_categorie 
                                    FROM categories 
                                    WHERE Nom = \''.$_POST['type'].'\'))');
            $sql->bindParam(':nom', $nom);
            $sql->bindParam(':description', $description);
            $sql->execute();        
            echo 'L\'article '.$nom;
        }
    }else{
        $sql = $con->prepare('  INSERT INTO articles(Nom,Description, Id_categorie)
                                VALUES(:nom, :description,
                                (SELECT Id_categorie 
                                FROM categories 
                                WHERE Nom = \''.$_POST['type'].'\'))');
        $sql->bindParam(':nom', $nom);
        $sql->bindParam(':description', $description);
        $sql->execute();        
        echo 'L\'article '.$nom;
    }
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}