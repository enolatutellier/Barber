<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/font.css"/>
    <script src="js/carrousel.js" defer></script>
    
    <title>
        Sylv'Barbe
    </title>

</head>
<body>
    <?php include_once ('header.php');?>
    <main>

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

                <article class="carte" id="carte1">
                    <img class="clou" src="img/clou.png" alt="clou">
                    <figure>
                        <img src="img/coupe1.jpg" alt="première coupe"class="img1">
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur
                        </figcaption>
                    </figure>
                </article>
               
                <article class="carte" id="carte2">
                    <img class="clou" src="img/clou.png" alt="clou">
                    <figure>
                        <img src="img/coupe2.jpg" alt="deuxième coupe" class="img1">
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur
                        </figcaption>
                    </figure>
                </article>

                <article class="carte" id="carte3">
                    <img class="clou" id="clou3" src="img/clou.png" alt="clou">
                    <figure>
                        <img src="img/coupe6.jpg" alt="troisième coupe"class="img1">
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur
                        </figcaption>
                    </figure>
                </article>


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
        <h2>Nos produits de soin</h2>
        <div id="presentation_soin">
            <article class="article">
                <figure>
                    <img src="img/pate modelante.jpg" alt="pate modelante">
                    <figcaption>
                        Pâte Modelante
                    </figcaption>
                </figure>
            </article>
            <article class="article">
                <figure>
                    <img src="img/shampoing.jpg" alt="shampoing">
                    <figcaption>
                        Shampoing
                    </figcaption>
                </figure>
            </article>
            <article class="article">
                <figure>
                    <img src="img/face cream.jpg" alt="crême visage">
                    <figcaption>
                        Crême visage
                    </figcaption>
                </figure>
            </article>
        </div>
    </section>
    
 
</main>
<?php include_once ('footer.php');?>
</body>
</html>
