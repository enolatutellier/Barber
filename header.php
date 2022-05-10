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
                <li id="categorie" class="bouton_menu"> 
                    <p>Catégorie</p>
                    <ul id='sous_menu_categorie'>
                        <li>
                            <a href="prestation.php">Prestation</a>
                        </li>
                        <li>
                            <a>Produits de soin</a>
                        </li>
                        <li>
                            <a>Equipements et accessoires</a>
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
                                    <a>Soin</a>
                                </li>
                                <li>
                                    <a>Coloration</a>
                                </li>
                                <li>
                                    <a>Forfait</a>
                                </li>
                                <li>
                                    <a>Barbe</a>
                                </li>
                                <li>
                                    <a>Coiffure</a>
                                </li>
                                <a href="prestation.php">Plus&nbsp;d'info&nbsp;>>></a>
                            </ul>
                        </li>
                        <li class="deroulant">
                            <p>Produit de soin</p>
                            <ul id='produit_sous_menu'class="sous_menu">
                                <li>
                                    <a>Baume à barbe</a>
                                </li>
                                <li>
                                    <a>Shampoings</a>
                                </li>
                                <li>
                                    <a>Huiles</a>
                                </li>
                                <li>
                                    <a>Cire à barbe</a>
                                </li>
                                <a href="soinsbarbe.html">Plus&nbsp;d'info&nbsp;>>></a>
                            </ul>
                        </li>
                        <li class="deroulant">
                            <p>Equipements et accesoires</p>
                            <ul id='accessoire_sous_menu' class="sous_menu">
                                <li>
                                    <a>Rasoir/Lame</a>
                                </li>
                                <li>
                                    <a>Blaireau</a>
                                </li>
                                <li>
                                    <a>Support</a>
                                </li>
                                <li>
                                    <a>Brosse/Peigne</a>
                                </li>
                                <li>
                                    <a>Bijoux</a>
                                </li>
                                <a href="prestation.php">Plus&nbsp;d'info&nbsp;>>></a>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
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

                <li>
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
                    <a id='monCompte' href="compte.php" class="bouton_menu">
                        Mon&nbsp;compte
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
