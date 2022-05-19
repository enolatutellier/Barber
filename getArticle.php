<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nomArticle = htmlspecialchars_decode(addslashes($_POST["nom"]));
    $sql = $con->prepare("  SELECT * from articles
                            WHERE Nom LIKE '{$nomArticle}'");
    $sql->execute();
    $article = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($article != []){
        $article = $article[0];
    }
    ?>      <div class='modal-content'>
                <span class='close' onclick='fermerModal();'>X</span>
                <h2><?=$article['Nom']?></h2>
                <div class='flex'>
                    <img src='img/<?=$article['Photo']?>' alt='<?=$article['Nom']?>'>
                    <p><?=$article['Description']?></p>
                </div>
                <p>Où en profiter ?</p>
            </div><?php
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}