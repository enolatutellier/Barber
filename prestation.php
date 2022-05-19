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
    <link rel="stylesheet" href="css/prestation.css"/>
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
            <div id='divImg'>
                <img src="img/fond prestation.jpg" alt='fond' id='fond'>
            </div>
            <div class='over'></div>
            <h1 id='titrePrestation'>Nos Prestations</h1>
        </section>
        <section id="sous-image">
            
            <p class="blanc citation">
                Nous vous proposons différents services dans nos salons répartis à travers l'Europe.
            </p>
        </section> 
        <section id="services">
            <img id="deco3" src="img/deco3.jpg">
            <img id="deco1" src="img/deco1.svg">
            <img id="deco2" src="img/deco2.svg">
            <img id='shampoing_tab' class="image_moyenne" src="img/soin.jpg" alt="soin">
            <h2 id="titre_soin_tab">Soin</h2>
            <div id="soin" class="carteInfo">
                <img id='shampoing' class="image_moyenne" src="img/soin.jpg" alt="soin">
                <h2 id="titre_soin">Soin</h2>
                <h3>RELAXATION TÊTE COMPLÈTE</h3>
                <p>Surtout dédié aux chevelures épaisses ou longues, ce soin est un masque relaxant. Il redonnera fière allure à vos pointes et détendra l’ensemble de votre crâne. Il est défini en fonction de votre problématique cheveu : nutrition ou hydratation, puis est appliqué avec massage au bac. De vous à nous, les moments douceur ne sont pas réservés qu’aux femmes. Chez The Barber Company, tout est fait pour vous rendre beau et bien dans votre peau.</p>
                <a href='recherche.php?categorie=soin' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <img id="img_coloration_tab" class="image_moyenne" src="img/coloration.jpg" alt="coloration">
            <h2 id="titre_coloration_tab" >Coloration</h2>
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
            <img id="img_forfait_tab" class="image_moyenne" src="img/forfait.jpg" alt="forfait">
            <h2 id="titre_forfait_tab">Forfait</h2>
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
            <div id='modal' class='modal'></div>
            <div id="barbe" class="presentoir">
                <h2 class="titre_presentoir">Barbe</h2>
                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Barbe\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                $i = 1;
                foreach($articles as $article){
                    echo '  <article id=\'barbe'.$i.'\' class=\'carte\' onclick=\'recupererArticle(this.firstElementChild.lastElementChild);\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                            </article>';
                    $i++;
                }
                ?>
                <a href='recherche.php?categorie=barbe' class="fleche">
                    <img src="img/fleche.png">
                </a>
            </div>
            <div id="coiffure" class="presentoir">
                <h2 class="titre_presentoir">Coiffure</h2>
                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Coiffure\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                $i=1;
                foreach($articles as $article){
                    echo '  <article id=\'coiffure'.$i.'\' class=\'carte\' onclick=\'recupererArticle(this.firstElementChild.lastElementChild);\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                            </article>';
                    $i++;
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
