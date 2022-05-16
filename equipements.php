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
            <div id="coloration" class="carteInfo">
                <img id="img_coloration" class="image_moyenne" src="img/coloration.jpg" alt="coloration">
                <h2 id="titre_coloration" >Coloration</h2>
                <p>3 types de colorations :<br>
                    – Fashionista : vous vibrez pour les tendances couleur les plus osées ? Décoloration, effet de couleur, pastellisation… cette prestation est faite pour vous !<br>
                    – Surfeur cool : vous aimez l’effet soleil dans vos cheveux comme si vous reveniez de vacances toute l’année ? The Barber Company vous propose une décoloration subtile sur les pointes.<br>
                    – Discret mais efficace : vous avez envie de camoufler vos cheveux blancs sans vous sentir coloré et totalement transformé ? Le coiffeur réalise une coloration subtile sur vos cheveux pour un résultat discret mais parfait.</p>
                <a href='recherche.php?categorie=coloration' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <div id="forfait" class="carteInfo">
                <img id="img_forfait" class="image_moyenne" src="img/forfait.jpg" alt="forfait">
                <h2 id="titre_forfait">Forfait</h2>
                <p>Pourquoi ne pas s’accorder un relooking complet ? Avec les forfaits disponibles chez The Barber Company, on s’occupe de votre barbe et de vos cheveux. Vous verrez, les deux services s’accordent à la perfection.</p>
                <a href='recherche.php?categorie=forfait' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
        </section>
        <div id="separation"></div>
        <section id='fin'>
            <div id="barbe" class="presentoir">
                <h2 class="titre_presentoir">Barbe</h2>
                <?php
                $sql = $con->prepare('  SELECT * FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Barbe\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article){
                    echo '  <article class=\'carte\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                            </article>';
                }
                ?>
                <a href='recherche.php?categorie=barbe' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <div id="coiffure" class="presentoir">
                <h2 class="titre_presentoir">Coiffure</h2>
                <?php
                $sql = $con->prepare('  SELECT * FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Coiffure\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article){
                    echo '  <article class=\'carte\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption><p>'.$article["Nom"].'</p></figcaption>
                                </figure>
                            </article>';
                }
                ?>
                <a href='recherche.php?categorie=coiffure' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <img id='enseigne' src="img/enseigne.png" alt="enseigne barbier">           
        </section>
    </main>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>
