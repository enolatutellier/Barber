<?php
    session_start() ;

  if(isset($_POST['mail']))
  {
     $email = $_POST['mail'];
     $pass = $_POST['pass'];
      
     $db = new PDO('mysql:host=localhost;dbname=barber' , 'root' , 'root');
     $sql = "SELECT * FROM users WHERE mail = '$email'";
     $result = $db->prepare($sql);
     $result->execute();
    

     if($result->rowCount() > 0)
     {
        $identification = $result->fetchAll(PDO::FETCH_ASSOC); 
        $identification = $identification[0];
        print_r ($identification);
       // echo "test";
       if($identification['Password'] == $pass)
       {
        $_SESSION['connexion'] = $identification['Id_user'];
        header('Location:index.php');
       };

     }
     else
     {
      //$pass = password_hash($pass, PASSWORD_DEFAULT);
      //$sql = "INSERT INTO users (mail,password) VALUES ('$email','$pass')";
      //$req = $db->prepare($sql);
      //$req->execute();
      //echo "Enregistrement effectué" ;
     }
  }


    /* if(isset($_POST['mail']) && isset ($_POST['pass'])){
    /*  $email = $_POST['mail'];
    $pass = $_POST['pass'];
    $requete = $db->prepare('INSERT INTO users (mail, pass) VALUES(?, ?)');
    $requete-> execute(array($mail, $pass));
     }*/
?>