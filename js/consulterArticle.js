function recupererArticle(e)
{
    let name = e.innerHTML;
    let modal = document.getElementById('modal');
    $.ajax({
        type: 'post',
        url: 'getArticle.php',
        data: {
        nom:name
        },
        success: function (response) {
        $('#modal').html(response);
        }
    });
    modal.style.display = 'block';       
    return false;
}

function fermerModal(){
    let modal = document.getElementById('modal');
    modal.style.display = 'none';
}

window.onclick = function(event){
    if(event.target == modal){
        modal.style.display = 'none';
    }
}