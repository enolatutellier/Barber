<?php 
// ouvertur de la session
session_start();
if(isset($_SESSION['connexion']))
{
   header('Location:compte.php');
}
if(!empty($_POST['mail']))
{
   $pseudo = $_POST['mail'];
   $_SESSION['connexion'];
}

//date dexpiration du cookie
if(!empty($_POST['mail']))
{
   $mail = $_POST['mail'];
   setcookie('mail', $mail, time()+ 365*24*4000);
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
            <input type="text" name="mail" placeholder="votremail@hotmail.fr" pattern="*{1.}[@][a-zA-Z]{2,}\.[a-zA-Z]{2,}" min="7" max="30" />
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
     <?php
     if(!empty ($_COOKIE['mail']))
     {
        echo '<h2>Bienvenue'.htmlspecialchars ($_COOKIE['pseudo']).'</h2>';
     }

     if(!empty($_SESSION['mail']))
     {
         echo '<h2> Bienvenue '.htmlspecialchars($_SESSION['mail']).'</h2>' ;
     }
     ?>

</main>
</body>
</html>


