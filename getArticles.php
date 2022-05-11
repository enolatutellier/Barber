<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=barber;charset=utf8", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $con->prepare('SELECT * from '.$_POST['table']);
    $sql->execute();
    $articles = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo '  <div class=\'card-columns\'>';
    foreach($articles as $article){
        echo '  <div class=\'\'>
                    <div class=\'card\'>
                        <div class=\'card-header d-flex justify-content-end\'>
                            <button type=\'button\' class=\'btn btn-danger bt-sm rounded-circle\' onclick=\'confirmation(this)\'>X</button>
                        </div>
                        <div class=\'card-body d-flex flex-column align-items-center\'>
                            <h2 class=\'card-title text-align-center\'>'.$article['Nom'].'</h2>
                            <img class=\'card-img rounded w-75\' title=\''.$article['Nom'].'\' src=\'img/'.$article["Photo"].'\' alt =\''.$article['Nom'].'\'/>
                            <p class=\'card-text w-100 text-justify\'>'.$article["Description"].'</p>
                        </div>
                        <div class=\'card-footer d-flex justify-content-center\'>
                            <button type=\'button\' class=\'btn btn-warning btn-lg\'>Modifier l\'article</button>
                        </div>
                    </div>
                </div>';
    }
    echo '  </div>
            <div class=\'row\'>
                <button type=\'button\' class=\'btn btn-block btn-primary\' data-toggle=\'modal\' data-target=\'#modal\'>Ajouter un article</button>
                <div class=\'modal fade\' id=\'modal\' tabindex=\'-1\' role=\'dialog\' aria-hidden=\'true\'>
                    <div class=\'modal-dialog\' roles=\'document\'>
                        <div class=\'modal-content\'>
                            <div class=\'modal-header\'>
                                <h3 class=\'modal-title\'>Ajout d\'un nouvel article</h3>
                                <button type=\'button\' class=\'close\' data-dismiss=\'modal\' aria-label=\'Close\'>
                                    <span aria-hidden=\'true\'>x</span>
                                </button>
                            </div>                            
                            <div class=\'modal-body\'>                                
                                <div class=\'form-group\'>
                                    <label for=\'nouveau_nom\'>Entrez le nom de l\'article</label>
                                    <input type=\'text\' class=\'form-control\' id=\'nouveau_nom\' name=\'nouveau_nom\' placeholder=\''.$_POST['table'].' xxx\'>
                                </div>
                                <div class=\'form-group\'>
                                    <label for=\'nouvelle_description\'>Entrez la description de l\'article</label>
                                    <input type=\'textarea\' class=\'form-control\' id=\'nouvelle_description\' name=\'nouvelle_description\' rows=\'3\'>
                                </div>
                                <div class=\'form-group\'>
                                    <label for=\'nouvelle_photo\'>Entrez la photo de l\'article</label>
                                    <input type=\'text\' class=\'form-control\' id=\'nouvelle_photo\' name=\'nouvelle_photo\'>
                                </div>
                            </div>
                            <div class=\'modal-footer\'>
                                <button type=\'button\' class=\'btn btn-secondary\' data-dismiss=\'modal\'>Annuler</button>
                                <button type=\'submit\' class=\'btn btn-primary\' data-dismiss=\'modal\' onclick=\'ajouterArticle();\'>Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}