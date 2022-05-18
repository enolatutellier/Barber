<?php
//echo "Bienvenu sur la page de connexion";

if(isset($_POST['mail']) && isset($_POST['pass'])) { //On verifie si l'utilisateur à rentré ses informations
  //Mettre l'email et le mdp dans des variables
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
   $server = "localhost";
   $dbname = "barber";
   $user = "root";
   $pass = "root";
   $db = new PDO("mysql:host=$server;dbname=barber", $user, $pass);
   //requete pour selectionner l'utilisateur qui a pour mail et mot de passe les identifiant qui ont été entrée dans la bdd
   $sql = "SELECT * FROM users where Mail = '$mail' ";
   $result = $db->prepare($sql);
   $result ->execute();
   $adresses = $result-> fetchAll(PDO::FETCH_ASSOC);
   
   $num_ligne = count ($adresses) ; // nombre de ligne ayant rapport à la requete sql 
   if($num_ligne >= 1){
      header("Location:index.php") ; // si le nombre de ligne est > 0 on sera dirigé a la page index
   }else{ //sinon
      echo "Adresse mail ou mot de passe incorrectes !" ;
   }

}
?> 


