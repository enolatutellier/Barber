<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recherche.css" />
    <link rel="stylesheet" href="css/font.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/consulterArticle.js" defer></script>
    
    <title>
        Sylv'Barbe
    </title>

</head>
<body>
    <?php include_once ('header.php');?>
    <main>
        <?php
        if (isset($_GET['recherche']))
        {
            echo '<p>Voici le résultat de votre recherche :</p><br><br>';
            try{
                $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '<div style=\'display:grid;grid-template-columns:repeat(3,1fr);gap :20px;\'>';
                $sql = $con->prepare('  SELECT Nom from articles
                                        WHERE Nom LIKE \'%'.$_GET['recherche'].'%\' OR Description LIKE \'%'.$_GET['recherche'].'%\' OR Photo LIKE \'%'.$_GET['recherche'].'%\'');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);                
                foreach($articles as $article){
                    echo '<a onclick=\'recupererArticle(this);\' href=\'#!\'>'.$article['Nom'].'</a>';
                }
                echo '</div>';
            }
            catch(PDOException $e){
                echo "Erreur : ".$e->getMessage();
            }
        }else if(isset($_GET['categorie'])){
            echo '<p>Voici notre liste de '.$_GET['categorie'].' :</p><br><br>';
            try{
                $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '<div style=\'display:grid;grid-template-columns:repeat(3,1fr);gap :20px;\'>';
                $sql = $con->prepare('  SELECT a.Nom from articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \''.$_GET['categorie'].'\'');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);                
                foreach($articles as $article){
                    echo '<a onclick=\'recupererArticle(this);\' href=\'#!\'>'.$article['Nom'].'</a>';
                }
                echo '</div>';
            }
            catch(PDOException $e){
                echo "Erreur : ".$e->getMessage();
            }
        }else if(isset($_GET['grandecategorie'])){
            echo '<p>Voici notre liste de '.$_GET['grandecategorie'].' :</p><br><br>';
            try{
                $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '<div style=\'display:grid;grid-template-columns:repeat(3,1fr);gap :20px;\'>';
                $sql = $con->prepare('  SELECT a.Nom from articles as a, categories as c1, categories as c2
                                        WHERE a.Id_categorie = c1.Id_categorie AND c1.Parent = c2.Id_categorie AND c2.Nom = \''.$_GET['grandecategorie'].'\'');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);                
                foreach($articles as $article){
                    echo '<a onclick=\'recupererArticle(this);\' href=\'#!\'>'.$article['Nom'].'</a>';
                }
                echo '</div>';
            }
            catch(PDOException $e){
                echo "Erreur : ".$e->getMessage();
            }
        }
        ?>
        <div id='modal' class='modal'></div>
    </main>
    <?php include_once ('footer.php');?>
</body>
</html>
