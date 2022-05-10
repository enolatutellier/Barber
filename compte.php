<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/compte.css" />
    <link rel="stylesheet" href="css/font.css"/>
    <script src="js/gestionArticles.js" defer></script>
    
    <title>
        Sylv'Barbe
    </title>

</head>
<body>
    <?php include_once ('header.php');?>
    <main>
        <button id="ajouter" onclick="ajouter()">Ajouter des articles</button>  
        <button id="modifier" onclick="modifier()">Modifier des articles</button>
        <button id="supprimer" onclick="supprimer()">Supprimer des articles</button>
        <section id='tableau_ajout'>
            <form method="post" action="ajouterArticle.php">
                <div>
                    <label for="type">
                        Type d'article
                    </label>
                    <select id="type" name="type">
                        <option value="soin">Soin</option>
                        <option value="coloration">Coloration</option>
                        <option value="forfait">Forfait</option>
                        <option value="barbe">Barbe</option>
                        <option value="coiffure">Coiffure</option>
                    </select>
                </div>
                <div>
                    <label for="nom">
                        Nom de l'article
                    </label>
                    <input type="text" id="nom" name="nom">    
                </div>
                <div>
                    <label for="description">
                        Description de l'article
                    </label>
                    <textarea name="description"></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </section>
        <section id='tableau_modif'>
            <form method="post" action="modifierArticle.php">
                <div>
                    <label for="type">
                        Type d'article
                    </label>
                    <select id="type" name="type">
                        <option value="soin">Soin</option>
                        <option value="coloration">Coloration</option>
                        <option value="forfait">Forfait</option>
                        <option value="barbe">Barbe</option>
                        <option value="coiffure">Coiffure</option>
                    </select>
                </div>
                <div>
                    <label for="nom">
                        Nom de l'article
                    </label>
                    <input type="text" id="nom" name="nom">    
                </div>
                <div>
                    <label for="nouveau_nom">
                        Nouveau nom de l'article
                    </label>
                    <input type="text" id="nouveau_nom" name="nouveau_nom">    
                </div>
                <div>
                    <label for="nouvelle_description">
                        Nouvelle description de l'article
                    </label>
                    <textarea name="nouvelle_description"></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </section>
        <section id="tableau_supp">
            <form method="post" action="supprimerArticle.php">
                <div>
                    <label for="type">
                        Type d'article
                    </label>
                    <select id="type" name="type">
                        <option value="soin">Soin</option>
                        <option value="coloration">Coloration</option>
                        <option value="forfait">Forfait</option>
                        <option value="barbe">Barbe</option>
                        <option value="coiffure">Coiffure</option>
                    </select>
                </div>
                <div>
                    <label for="nom">
                        Nom de l'article
                    </label>
                    <input type="text" id="nom" name="nom">    
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </section>
    </main>
    <?php include_once ('footer.php');?>
</body>
</html>
