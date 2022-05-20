<?php
session_start();
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
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="./css/font.css"/>
    <script src="js/sous_menu_deroulant.js" defer></script>
    <script src="js/recherche.js" defer></script>

</head>
<body>
<header>
        <nav>
            <ul id="menu">
                <div id="overlay"></div>
                <li id='burger' class="deroulant"> 
                    <p>
                        Menu
                    </p>
                    <ul id='sous_menu_burger' class="sous_menu">
                        <li>
                            <a href="log.php">
                                <?php
                                if(isset($_SESSION['connexion'])){
                                    $sql = "SELECT * FROM users where Id_user = {$_SESSION['connexion']}";
                                    $result = $con->prepare($sql);
                                    $result->execute();
                                    $identification = $result->fetchAll(PDO::FETCH_ASSOC);
                                    $identification = $identification[0];
                                    echo $identification["Pseudo"];
                                }
                                else{
                                
                                    echo 'Mon&nbsp;compte';
                                }
                                ?>
                            </a>
                        </li>
                        <li class="deroulant_burger"> 
                            <p>Catégorie&nbsp;▶</p>
                            <ul class='sous_menu_burger'>
                                <li>
                                    <a href="prestation.php">
                                        <p>Prestation</p>
                                    </a>
                                </li>
                                <li>
                                    <a href ="soinbarbe.php">
                                        <p>Produits de soin</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="equipements.php">
                                        <p>Equipements et accessoires</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="deroulant_burger"> 
                            <p>
                                Nos&nbsp;produits&nbsp;▶
                            </p>
                            <ul class="sous_menu_burger">
                                <li class="deroulant_article">
                                    <p>Prestation&nbsp;▶</p>
                                    <ul id='prestation_sous_menu' class="sous_menu_article">
                                        <li>
                                            <a href='recherche.php?categorie=soin'>
                                                <p>Soin</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=coloration'>
                                                <p>Coloration</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=forfait'>
                                                <p>Forfait</p>                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=barbe'>
                                                <p>Barbe</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=coiffure'>
                                                <p>Coiffure</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="recherche.php?grandecategorie=prestation">
                                                <p>Tous les articles</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="deroulant_article">
                                    <p>Produits de soin&nbsp;▶</p>
                                    <ul id='produit_sous_menu'class="sous_menu_article">
                                        <li>
                                            <a href='recherche.php?categorie=Baumes'>
                                                <p>Baume à barbe</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Shampoings'>
                                                <p>Shampoings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Huiles'>
                                                <p>Huiles</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Cires'>
                                                </p>Cire à barbe</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="recherche.php?grandecategorie=produit de soin">
                                                <p>Tous les articles</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="deroulant_article">
                                    <p>Equipements et accessoires&nbsp;▶</p>
                                    <ul id='accessoire_sous_menu' class="sous_menu_article">
                                        <li>
                                            <a href='recherche.php?categorie=Rasoirs'>
                                                <p>Rasoir/Lame</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Blaireaux'>
                                                <p>Blaireau</p> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Supports'>
                                                <p>Support</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Brosses/Peignes'>
                                                <p>Brosse/Peigne</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='recherche.php?categorie=Bijoux'>
                                                <p>Bijoux</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="recherche.php?grandecategorie=Equipement et accessoire">
                                                <p>Tous les articles</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="categorie" class="bouton_menu"> 
                    <p>Catégorie</p>
                    <ul id='sous_menu_categorie'>
                        <li>
                            <a href="prestation.php">
                                <p>Prestation</p>
                            </a>
                        </li>
                        <li>
                            <a href ="soinbarbe.php">
                                <p>Produits de soin</p>
                            </a>
                        </li>
                        <li>
                            <a href="equipements.php">
                                <p>Equipements et accessoires</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li id='deroulant_principal' class="deroulant"> 
                    <p>
                        Nos&nbsp;produits
                    </p>
                    <ul id='sous_menu_principal' class="sous_menu">
                        <p id="quitter_menu">X</p>
                        <li class="deroulant">
                            <p>Prestation</p>
                            <ul id='prestation_sous_menu' class="sous_menu">
                                <li>
                                    <a href='recherche.php?categorie=soin'>
                                        <p>Soin</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Soin\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image soin'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=coloration'>
                                        <p>Coloration</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Coloration\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image coloration'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=forfait'>
                                        <p>Forfait</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Forfait\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image forfait'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=barbe'>
                                        <p>Barbe</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Barbe\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image barbe'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=coiffure'>
                                        <p>Coiffure</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Coiffure\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image coiffure'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <a href="recherche.php?grandecategorie=prestation">Plus&nbsp;d'articles&nbsp;>>></a>
                            </ul>
                        </li>
                        <li class="deroulant">
                            <p>Produit de soin</p>
                            <ul id='produit_sous_menu'class="sous_menu">
                                <li>
                                    <a href='recherche.php?categorie=Baumes'>
                                        <p>Baume à barbe</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Baumes\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image baume'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Shampoings'>
                                        <p>Shampoings</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Shampoings\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image shampoings'>
                                            <?php }
                                        ?>
                                        </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Huiles'>
                                        <p>Huiles</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Huiles\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image huile'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Cires'>
                                        </p>Cire à barbe</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Cires\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image cires'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <a href="recherche.php?grandecategorie=produit de soin">Plus&nbsp;d'articles&nbsp;>>></a>
                            </ul>
                        </li>
                        <li class="deroulant">
                            <p>Equipements et accesoires</p>
                            <ul id='accessoire_sous_menu' class="sous_menu">
                                <li>
                                    <a href='recherche.php?categorie=Rasoirs'>
                                        <p>Rasoir/Lame</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Rasoirs\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image rasoir'>
                                            <?php }
                                        ?>
                                        </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Blaireaux'>
                                        <p>Blaireau</p>                                    
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Blaireaux\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image blaireau'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Supports'>
                                        <p>Support</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Supports\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image support'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Brosses/Peignes'>
                                        <p>Brosse/Peigne</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Brosses\/Peignes\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image brosse\/peigne'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href='recherche.php?categorie=Bijoux'>
                                        <p>Bijoux</p>
                                        <?php
                                            $sql = $con->prepare('  SELECT a.Photo FROM articles as a, categories as c
                                                                    WHERE a.Id_categorie = c.Id_categorie AND c.Nom = \'Bijoux\'
                                                                    ORDER BY Id_article DESC
                                                                    LIMIT 1');
                                            $sql->execute();
                                            $image = $sql->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($image as $img){
                                                ?>
                                            <img class='petite_image' src='img/<?=$img['Photo']?>' alt='image bijou'>
                                            <?php }
                                        ?>
                                    </a>
                                </li>
                                <a href="recherche.php?grandecategorie=Equipement et accessoire">Plus&nbsp;d'articles&nbsp;>>></a>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class='style'>
                    <div class="trait-vert">
                    </div>

                    <div class="trait-vert">
                    </div>

                </li>

                <a href="index.php" id='index_retour'>
                    <li id="logoblanc">
                        <img src="img/logo.svg" alt="logo">
                    </li>
                </a>

                <li class='style'>
                    <div class="trait-vert">

                    </div>

                    <div class="trait-vert">

                    </div>

                </li>

                <li id = "recherche">
                    <input id="recherche" type="text" placeholder="🔍 Recherche">
                    <span id="longueur_minimum">La recherche requiert au moins 3 caractères</span>
                </li>

                <li>
                    <a id='monCompte' href="log.php" class="bouton_menu">
                        <?php
                        if(isset($_SESSION['connexion'])){
                            $sql = "SELECT * FROM users where Id_user = {$_SESSION['connexion']}";
                            $result = $con->prepare($sql);
                            $result->execute();
                            $identification = $result->fetchAll(PDO::FETCH_ASSOC);
                            $identification = $identification[0];
                            echo $identification["Pseudo"];
                        }
                        else{
                        
                            echo 'Mon&nbsp;compte';
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
