<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/equipements.css"/>
    <link rel="stylesheet" href="css/font.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='js/consulterArticle.js' defer></script>

    <title>
        Sylv'Barbe
    </title>

</head>
<body>
    <?php include_once ('header.php');?>
    <main>
        <section id="presentation">
            <h1>Nos Equipements et accessoires</h1>
        </section>
        <section id="sous-image">
            <p class="blanc citation">
                Rasoirs droits, blaireaux, lames ou encore perles pour barbes.<br>Notre choix est large pour vous satisfaire au mieux.
            </p>
        </section> 
        <section id="equipements">
            <img id="deco3" src="img/deco3.jpg">
            <img id="deco1" src="img/deco1.svg">
            <img id="deco2" src="img/deco2.svg">
            <div id="rasoirs-lames" class="carteInfo">
                <img id='rasoirs' class="image_moyenne" src="img/rasoirs.jpg" alt="rasoirs">
                <h2 id="titre_rasoirs">Rasoirs et lames</h2>
                <p>
                    Notre sélection de rasoirs Thiers Issard, Dovo Solingen, Giesen und Forsthoff, Timor, Razolution, Puma , Böker , Merkur Solingen.
                    Coupes choux, rasoirs de sûreté, lame de rasoirs double tranchants. Venez trouver votre bonheur!

                </p>
                <a href='recherche.php?categorie=rasoirs' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <div id="blaireau" class="carteInfo">
                <img id="img_blaireau" class="image_moyenne" src="img/blaireau.webp" alt="blaireau">
                <h2 id="titre_blaireau" >Blaireaux</h2>
                <p>Le blaireau de rasage, garni d'authentiques poils de blaireaux ou soies de sanglier, de porc, mais aussi de cheval, est un accessoire qui vous garantit un rasage traditionnel réussi. Le blaireau de rasage est utilisé pour faire mousser le savon à barbe et l'appliquer sur le visage.</p>
                <a href='recherche.php?categorie=blaireaux' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <div id="support" class="carteInfo">
                <img id="img_support" class="image_moyenne" src="img/support.jpg" alt="support">
                <h2 id="titre_support">Supports</h2>
                <p>Pourquoi ne pas s’accorder un relooking complet ? Avec les forfaits disponibles chez The Barber Company, on s’occupe de votre barbe et de vos cheveux. Vous verrez, les deux services s’accordent à la perfection.</p>
                <a href='recherche.php?categorie=supports' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
        </section>
        <section id='fin'>
            <div id='modal' class='modal'></div>
            <img id='enseigne' src="img/enseigne avec accroche murale.png" alt="enseigne barbier">  
            <div id="brosses/peignes" class="presentoir">
                <h2 class="titre_presentoir">Brosses/Peignes</h2>
                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Brosses/Peignes\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article){
                    echo '  <article class=\'carte\' onclick=\'recupererArticle(this.firstElementChild.lastElementChild);\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                            </article>';
                }
                ?>
                <a href='recherche.php?categorie=Brosses\/Peignes' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <div id="bijoux" class="presentoir">
                <h2 class="titre_presentoir">Bijoux</h2>
                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Bijoux\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article){
                    echo '  <article class=\'carte\' onclick=\'recupererArticle(this.firstElementChild.lastElementChild);\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                            </article>';
                }
                ?>
                <a href='recherche.php?categorie=bijoux' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
                     
        </section>
    </main>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>
