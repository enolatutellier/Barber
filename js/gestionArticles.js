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
  let resultat = window.confirm("Etes-vous sûr(e) de vouloir supprimer cet article ?");
  if (resultat) {
    suppArticle(e);
  }
}

function suppArticle(e)
{
    let numero = e.parentElement.firstElementChild.innerHTML;
    $.ajax({
        type: 'post',
        url: 'supprimerArticle.php',
        data: {
          id:numero
        },
        success: function (response) {
          alert("Element supprimé");          
          GetData();
        }
    });
    return false;
}

function ajouterArticle()
{
    let name = document.getElementById('nouveau_nom').value;
    if (name == ""){
      alert('Le nom de l\'article obligatoire.');
      return;
    }
    let description = document.getElementById('nouvelle_description').value;
    let photo = document.getElementById('nouvelle_photo').value;
    let typeCat = document.getElementById("type_principal").value;
    let formData = new FormData();
    formData.append('nom', name);
    formData.append('description', description);
    formData.append('type', typeCat);
    if(photo != ""){
      formData.append('photo', document.getElementById('nouvelle_photo').files[0]);
    }
    $.ajax({
        type: 'post',
        url: 'ajouterArticle.php',
        data: formData,
        processData: false,
        contentType : false,
        success: function (response) {
          alert(''.concat(response,' a bien été ajouté !'));
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
  let id = e.parentElement.parentElement.firstElementChild.firstElementChild.innerHTML;
  let description = document.getElementById('new_desc').value;
  let formData = new FormData();
  if (document.getElementById('new_photo').value == ''){
    formData.append('photo', '');
  } else {
    formData.append('photo', document.getElementById('new_photo').files[0]);
  }
  formData.append('nom', name);
  formData.append('description', description);
  formData.append('id', id);
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
  let new_name = document.createElement('input');
  new_name.setAttribute('class', 'cart-title text-center w-100');  
  new_name.setAttribute('type', 'texte');
  new_name.setAttribute('id', 'new_name');
  new_name.setAttribute('name', 'new_name');
  new_name.setAttribute('placeholder', oldTitleValue);
  title.replaceWith(new_name);
  let test = document.createElement("input");
  test.type = "file";
  test.name = "new_photo";
  test.id = "new_photo";
  let centre = document.createElement("div");
  centre.setAttribute('class', 'd-flex justify-content-center align-items-center h-100');
  centre.appendChild(test);
  image.appendChild(centre);
  let oldDescriptionValue = description.innerHTML;
  let new_description = document.createElement('textarea');
  new_description.setAttribute('class', 'card-text w-100 text-justify');  
  new_description.setAttribute('id', 'new_desc');
  new_description.setAttribute('name', 'new_desc');
  new_description.setAttribute('rows', '5');
  description.replaceWith(new_description);
  new_description.innerHTML = oldDescriptionValue;
  let footer = e.parentElement;
  let oldfooter = footer.cloneNode([true]);
  let annuler = document.createElement("button");
  annuler.type = 'button';
  annuler.setAttribute('class', 'btn btn-secondary btn-lg');
  annuler.onclick = function () {
    new_name.replaceWith(oldTitle);
    image.replaceWith(oldImage);
    new_description.replaceWith(oldDescription);
    footer.replaceWith(oldfooter);
  }
  annuler.innerHTML = 'Annuler';
  annuler = footer.insertBefore(annuler, e);
  e.innerHTML = 'Confirmer';
  e.setAttribute('class', 'btn btn-primary btn-lg');
  e.onclick = function () { confirmerModificationArticle(e) };
}