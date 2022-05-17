<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/soinbarbe.css" />
    <link rel="stylesheet" href="css/font.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='js/consulterArticle.js' defer></script>

    <title>
        Sylv'Barbe
    </title>

</head>

<body>
        <?php include_once ('header.php');?>

    <main>
        <div id="modal" class="modal"> </div>

        <section id="presentation">

            <h1>
                Soins de la Barbe
            </h1>

        </section>

        <section id="sous-image">

            <p class="blanc citation">
                Nous vous proposons diférents services dans nos salons répartis à travers l'Europe.
            </p>
            <p id="para1"> De la crème, du baume en passant par des blaireaux<br> du shampoings et bien d'autre
                cosmetique & accesoires!</p>

        </section>

        <section class="section3">
            
            <img src="img/deco2.svg" alt="decorationn en carré coloré" id="deco2svg">
        </section>

        <section class="Baume">

            <div class="conteneur">
                <p id="para2">
                    Baume à Barbe
                </p>
                <div class="ligneGauche">
                </div>

                <div class="carteBaume">

                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Baumes\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article)
                {
                    echo ' 
                                <figure onclick=\'recupererArticle(this.lastElementChild);\'>
                                <div class=\'img-centre\'> 
                                <img class=\'petite-image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                </div>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure> ';
                }
                ?>

                </div>

                <img src="img/fleche.png" alt="fleche noir" id="fleche2">
            </div>
        </section>

                    
        

        <section class="shampoing">

            
            <div class="conteneur" id='conteneur2'>
                <p id="para2">
                    Shampoings
                </p>
                <img src="img/fleche.png" alt="fleche noir" id="fleche3">

                <div class="carteBaume">

                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Shampoings\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article){
                    echo ' 
                                <figure onclick=\'recupererArticle(this.lastElementChild);\'>
                                <div class=\'img-centre\'> 
                                <img class=\'petite-image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                </div>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure> ';
                }
                ?>

                </div>

                
                <div class="ligneGauche">
                </div>
    
            </div>
        </section>



        <section class="huiles">

            <p id="para4">
                Huiles
            </p>

            <div class="conteneur2">
                <div class="cartehuile">

                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Huiles\'
                                        ORDER BY Id_article DESC
                                        LIMIT 2');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article)
                {
                    echo ' 
                                <figure onclick=\'recupererArticle(this.lastElementChild);\'>
                                <div class=\'img-centre\'> 
                                <img class=\'petite-image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                </div>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure> ';
                }
                ?> 
                <img src="img/fleche.png" alt="fleche noir" id="fleche4">
                </div>
                   
                </div>
                
                
        </section>

        <section class="cireBarbe">
            <img src="img/deco2.svg" alt="image de décoration orange" id="imgDeco2SVG">

            <p id="para5">
                Cire à Barbe
            </p>
            <img src="/img/bois.jpg" alt="planche en bois" id="imgBois">
            

            <div class="carteCire">
            <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Cires\'
                                        ORDER BY Id_article DESC
                                        LIMIT 2');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article)
                {
                    echo ' 
                                <figure onclick=\'recupererArticle(this.lastElementChild);\'>
                                <div class=\'img-centre\'> 
                                <img class=\'petite-image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                </div>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure> ';
                }
                ?> 
                <img src="img/fleche.png" alt="fleche noir" id="fleche5"> 
            </div>
        </section>
    </main>
    <?php include_once ('footer.php');?>
</body>

</html>
    