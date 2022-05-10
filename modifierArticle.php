<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($_POST["nouveau_nom"] != ''){
        $new_name = $_POST["nouveau_nom"];
        if($_POST["nouvelle_description"] != ''){
            $new_desc = $_POST["nouvelle_description"];
            $sql = $con->prepare('UPDATE '.$_POST["type"].'
                                  SET Nom = \''.$new_name.'\', Description = \''.$new_desc.'\'
                                  WHERE Nom = \''.$_POST['nom'].'\'');
            $sql->execute();
        }else{
            $new_desc = $_POST["nouvelle_description"];
            $sql = $con->prepare('UPDATE '.$_POST["type"].'
                                  SET Nom = \''.$new_name.'\'
                                  WHERE Nom LIKE \''.$_POST['nom'].'\'');
            $sql->execute();
        }
    }else if($_POST["nouvelle_description"] !=''){
        $new_desc = $_POST["nouvelle_description"];
        $sql = $con->prepare('UPDATE '.$_POST["type"].'
                              SET Description = \''.$new_desc.'\'
                              WHERE Nom = \''.$_POST['nom'].'\'');
        $sql->execute();
    }
    header('Location:compte.php');
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
