<?php 
// ouvertur de la session
session_start();
if(isset($_SESSION['connexion']))
{
   header('Location:compte.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css" />
    <link rel="stylesheet" href="css/font.css"/>
    
    <title>
        Sylv'Barbe
    </title>

</head>

<body>

<main>

    <form action="connexion.php" method="POST" class="formulaire">
    <p> Veuillez vous connecter</p>

        <div class="champ">
            <label for="mail">
                Mail :
            </label>
            <input type="text" name="mail" placeholder="mail@"/>
        </div>
       <div class="champ">
           <label for="pass"> 
               Votre mot de passe :
            </label>
           <input type="password" name="pass"/>
       </div>
           <a href="#"> 
               S'inscrire
           </a>
           <input id="envoyer" type="submit" name="envoi" value='Envoyer'>
    </form>

</main>
</body>
</html>


