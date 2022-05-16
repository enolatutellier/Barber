<?php

if(isset($_POST['mail']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    try{

        $conn = new PDO("mysql:host=$servername;dbname=exercices_sql", $username, $password);
        
        //On définit le mode d'erreur de PDO sur Exception
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo 'Connexion réussie';
        
        }
        
        /*On capture les exceptions si une exception est lancée et on affiche
        
        *les informations relatives à celle-ci*/
        
        catch(PDOException $e){
        
        echo "Erreur : " . $e->getMessage();
        }


    $sql = "SELECT * FROM user where email = '$email' ";
    $result = $db->prepare($sql);
    $result-> execute();

        if ($result ->rowCount() > 0)

    {
        echo "Connexion reussi";
    }
        else
    {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (email, password) VALUES ('$email' , '$pass') ";
        $req = $db->prepare($sql);
        $req->execute();
        
    }
}
?> 


