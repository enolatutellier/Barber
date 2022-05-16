<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/gestionArticles.js" defer></script>
    
    <title>
        Sylv'Barbe
    </title>

</head>
<body>
    <div class='container-fluid'>
        <div class='row'>
            <a class='nav-link' href="index.php">Retour au site</a>
        </div>
        <div class='row justify-content-center'>
            <p>Gestionnaire d'articles</p>
        </div>
        <div class='row justify-content-center'>
            <form method="post" onsubmit="return GetData();">
                <select id="type_principal" name="type">
                    <option>Choisissez le type d'article</option>
                    <option value="soin">Soin</option>
                    <option value="coloration">Coloration</option>
                    <option value="forfait">Forfait</option>
                    <option value="barbe">Barbe</option>
                    <option value="coiffure">Coiffure</option>
                    <option value="huiles">Huiles</option>
                    <option value="Cires">Cires</option>
                    <option value="Shampoings">Shampoings</option>
                    <option value="Baumes">Baumes</option>
                    <option value="rasoirs">Rasoirs</option>
                    <option value="blaireaux">Blaireaux</option>
                    <option value="supports">Supports</option>
                    <option value="brosses/peignes">Brosses/Peignes</option>
                    <option value="bijoux">Bijoux</option>
                </select>
                <input type="submit" value="Envoyer">
            <form>
        </div>
        <div id="articles" class='containeur-fluid mb-3'></div>
    </div>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
