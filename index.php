    <?php 
    //On demare la session sur sur cette page 
                                    // $previous_name = session_name("Sylv\'Barbe");
    session_start() ;
    if(!empty($_POST['mail'])){
        $mail = $_POST['mail'];
    }
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/font.css"/>
  <!--  <meta http-equiv="refresh" content="35; url=index.php">  Permet de redirigé la page sur une page choisis -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='js/consulterArticle.js' defer></script>
    <script src="js/carrousel.js" defer></script>
    
    <title>
        Sylv'Barbe
    </title>

</head>
<body>
    <?php include_once ('header.php');?>
    <main>
        <div id='modal' class='modal'></div>
        <section class="section0">
            <div id="carrousel">
                <img class='img_carrousel' src="img/coupe8.jpg" alt="homme avec une moustache">
                <img class='img_carrousel' src="img/coupe7.jpg" alt="homme avec une moustache">
                <img class='img_carrousel' src="img/coupe6.jpg" alt="homme avec une moustache">
                <img class='img_carrousel' src="img/coupe8.jpg" alt="homme avec une moustache">
                <img class='img_carrousel' src="img/coupe7.jpg" alt="homme avec une moustache">
                <img class='img_carrousel' src="img/coupe6.jpg" alt="homme avec une moustache">
            </div>
            
        </section>

    <section class="section1">
                          
            <div class="conteneur">

                <h2 id="titre_cont">
                    Nos prestations
                </h2>

                <?php
                $sql = $con->prepare("  SELECT * FROM articles
                                        WHERE exclusivite = '2'
                                        ORDER BY Id_article DESC
                                        LIMIT 3");
                                //demande sql pour récupérer les articles exclusifs

                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                $i = 1;
                foreach($articles as $article){
                    echo '  <article class=\'carte\' id=\'carte'.$i.'\'onclick=\'recupererArticle(this.firstElementChild.lastElementChild);\'>
                                <figure>
                                    <img class=\'img1\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                                <img class=\'clou \'src=\'img/clou.png\' id=\'clou'.$i.'\' alt=\'clou\'> 
                            </article>';
                            $i++;
                }
                ?>


    </section>

    <section class="section2">

        <div class="conteneur2">

            <img src="img/imgVecto2.png" alt="image vectoriel en cuir" id="img4">

            <img src="img/produitBarber.jpg" alt="produit pour barber"id="img2">

            <img src="img/coupe4.jpg" alt="blaireau et accessoires" id="img1">
        
            <img src="img/siegeBarber.jpg" alt="sière de barber"id="img3">

            

        </div>

    </section>

    <div id="separation"></div>

    <section class="section3">
        <h2>Nos produits de soin du moment</h2>
        <div id="presentation_soin">
        <?php
                $sql = $con->prepare("  SELECT * FROM articles
                                        WHERE exclusivite = '2'
                                        ORDER BY Id_article DESC
                                        LIMIT 3");
                                //demande sql pour récupérer les articles exclusifs

                $sql->execute();
                $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($articles as $article){
                    echo '  <article class=\'article\' onclick=\'recupererArticle(this.firstElementChild.lastElementChild);\'>
                                <figure>
                                    <img class=\'petit_image\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                                    <figcaption>'.$article["Nom"].'</figcaption>
                                </figure>
                            </article>';
                }
                ?>
        </div>
    </section>
    
 
</main>
<?php include_once ('footer.php');?>
</body>
</html>
