function GetData()
{
  let typeCat = document.getElementById("type_principal").value;
  $.ajax({
    type: 'post',
    url: 'getArticles.php',
    data: {
      table:typeCat
    },
    success: function (response) {
      $('#articles').html(response);
    }
  });
    
  return false;
}

function confirmation(e){
    resultat = window.confirm("Etes-vous sûr(e) de vouloir supprimer cet article ?");
    if (resultat){
        suppArticle(e);
    }
}

function suppArticle(e)
{
    let name = e.parentElement.nextElementSibling.firstElementChild.innerHTML;
    let typeCat = document.getElementById("type_principal").value;
    $.ajax({
        type: 'post',
        url: 'supprimerArticle.php',
        data: {
          table:typeCat,
          nom:name
        },
        success: function (response) {
          alert('element supprimé');          
          GetData();
        }
    });
    return false;
}

function ajouterArticle()
{
    let name = document.getElementById('nouveau_nom').value;
    let description = document.getElementById('nouvelle_description').value;
    let photo = document.getElementById('nouvelle_photo').value;
    let typeCat = document.getElementById("type_principal").value;
    $.ajax({
        type: 'post',
        url: 'ajouterArticle.php',
        data: {
          table:typeCat,
          nom:name,
          description:description,
          photo:photo
        },
        success: function (response) {
          alert('L\'article '.concat(response,' a bien été ajouté !'));
          GetData();
        }
    });
    return false;
}