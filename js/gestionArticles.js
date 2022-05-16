function GetData() {
  let typeCat = document.getElementById("type_principal").value;
  $.ajax({
    type: 'post',
    url: 'getArticles.php',
    data: {
      type:typeCat
    },
    success: function (response) {
      $('#articles').html(response);
    }
  });

  return false;
}

function confirmation(e) {
  resultat = window.confirm("Etes-vous sûr(e) de vouloir supprimer cet article ?");
  if (resultat) {
    suppArticle(e);
  }
}

function suppArticle(e) {
  let name = e.parentElement.nextElementSibling.firstElementChild.innerHTML;
  let typeCat = document.getElementById("type_principal").value;
  $.ajax({
    type: 'post',
    url: 'supprimerArticle.php',
    data: {
      table: typeCat,
      nom: name
    },
    success: function (response) {
      alert('element supprimé');
      GetData();
    }
  });
  return false;
}

function suppArticle(e)
{
    let name = e.parentElement.nextElementSibling.firstElementChild.innerHTML;
    $.ajax({
        type: 'post',
        url: 'supprimerArticle.php',
        data: {
          type:typeCat,
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
    let formData = new FormData();
    formData.append('nom', name);
    formData.append('description', description);
    formData.append('type', typeCat);
    formData.append('photo', document.getElementById('nouvelle_photo').files[0]);
    $.ajax({
        type: 'post',
        url: 'ajouterArticle.php',
        data: formData,
        processData: false,
        contentType : false,
        success: function (response) {
          alert('L\'article '.concat(response,' a bien été ajouté !'));
          GetData();
        }
    });
    return false;
}

function confirmerModificationArticle(e){
  let name = document.getElementById('new_name');
  let oldName = name.placeholder;
  if (name.value == '') {
    name = oldName;
  } else {
    name = name.value;
  }
  let description = document.getElementById('new_desc').value;
  let formData = new FormData();
  if (document.getElementById('new_photo').value == ''){
    formData.append('photo', '');
  } else {
    formData.append('photo', document.getElementById('new_photo').files[0]);
  }
  formData.append('nom', name);
  formData.append('oldName', oldName);
  formData.append('description', description);
  $.ajax({
    type: 'post',
    url: 'modifierArticle.php',
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      alert('L\'article '.concat(response, ' a bien été modifié !'));
      GetData();
    }
  });
  return false;
}

function modifierArticle(e) {
  let title = e.parentElement.parentElement.firstElementChild.nextElementSibling.firstElementChild;
  let oldTitle = title.cloneNode([true]);
  let image = title.nextElementSibling;
  let oldImage = image.cloneNode([true]);
  let description = image.nextElementSibling;
  let oldDescription = description.cloneNode([true]);
  let oldTitleValue = title.innerHTML;
  title.innerHTML = '<input class=\'cart-title text-center w-100\' type=\'texte\' id=\'new_name\' name=\'new_name\' placeholder =\''.concat(oldTitleValue, '\'>');
  let test = document.createElement("input");
  test.type = "file";
  test.name = "new_photo";
  test.id = "new_photo";
  let centre = document.createElement("div");
  centre.setAttribute('class', 'd-flex justify-content-center align-items-center h-100');
  centre.appendChild(test);
  image.appendChild(centre);
  let oldDescriptionValue = description.innerHTML;
  description.innerHTML = '<textarea class=\'card-text w-100 text-justify\' id=\'new_desc\' name=\'new_desc\' rows=\'5\' >'.concat(oldDescriptionValue, '</textarea>');
  let footer = e.parentElement;
  let oldfooter = footer.cloneNode([true]);
  let annuler = document.createElement("button");
  annuler.type = 'button';
  annuler.setAttribute('class', 'btn btn-secondary btn-lg');
  annuler.onclick = function () {
    title.replaceWith(oldTitle);
    image.replaceWith(oldImage);
    description.replaceWith(oldDescription);
    footer.replaceWith(oldfooter);
  }
  annuler.innerHTML = 'Annuler';
  annuler = footer.insertBefore(annuler, e);
  e.innerHTML = 'Confirmer';
  e.setAttribute('class', 'btn btn-primary btn-lg');
  e.onclick = function () { confirmerModificationArticle(e) };
}