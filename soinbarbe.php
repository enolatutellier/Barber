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
            <div id='divImg'>
                <img src="img/soinbarbe.jpg" alt='fond' id='fond'>
            </div>
            <div class='over'></div>
            <h1 id='titrePrestation'>Soins de la Barbe</h1>
        </section>

        <section id="sous-image">

            <p class="blanc citation">
            De la crème, du baume en passant par des blaireaux, du shampoings et bien d'autre
                cosmetique & accesoires!
            </p>

            <img src="img/deco2.svg" alt="decorationn en carré coloré" id="deco2svg">

        </section>


        <section class="Baume">

            <p id="para2">
                Baume à Barbe
            </p>
            <div class="conteneur">
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
                $i = 1;
                foreach($articles as $article)
                {
                    echo ' 
                                <figure id=\'baume'.$i.'\' onclick=\'recupererArticle(this.lastElementChild);\'>
                                <div class=\'img-centre\'> 
                                <img class=\'petite-image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                </div>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure> ';
                    $i++;
                }
                ?>

                </div>

                <a href='recherche.php?categorie=Baumes' id="fleche2">
                    <img src="img/fleche.png" alt="fleche noir">
                </a>
            </div>
        </section>

                    
        

        <section class="shampoing">

        
            <p id="para3">
                Shampoings
            </p>
            <div class="conteneur" id='conteneur2'>

                <a href='recherche.php?categorie=Shampoings' id="fleche3">
                    <img src="img/fleche.png" alt="fleche noir">
                </a>

                <div class="carteBaume">

                <?php
                $sql = $con->prepare('  SELECT a.Nom, a.Description, a.Photo FROM articles as a, categories as c
                                        WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Shampoings\'
                                        ORDER BY Id_article DESC
                                        LIMIT 3');
                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                $i=1;
                foreach($articles as $article){
                    echo ' 
                                <figure id=\'shampoing'.$i.'\'onclick=\'recupererArticle(this.lastElementChild);\'>
                                <div class=\'img-centre\'> 
                                <img class=\'petite-image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                </div>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure> ';
                    $i++;
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
                </div>
                <a href='recherche.php?categorie=Huiles'>
                    <img src="img/fleche.png" alt="fleche noir" id="fleche4">
                </a>
            </div>
                
                
        </section>
        <p id="para5">
            Cire à Barbe
        </p>
        <section class="cireBarbe">
            <img src="img/deco2.svg" alt="image de décoration orange" id="imgDeco2SVG">

            
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
                <a href='recherche.php?categorie=cires'>
                    <img src="img/fleche.png" alt="fleche noir" id="fleche5">
                </a>
            </div>
        </section>
    </main>
    <?php include_once ('footer.php');?>
</body>

</html>
    