let recherche = document.getElementById('recherche').firstElementChild;
let tooltip = document.getElementById("longueur_minimum");

recherche.addEventListener("keypress", function (e){
    if(e.key === "Enter" && recherche.value.length >= 3){
        window.location.href = 'recherche.php?recherche='.concat(recherche.value);
    } else{
        if (e.key === "Enter" && recherche.value.length < 3){
            tooltip.style.visibility = 'visible';
            tooltip.style.opacity = '1';
        }else{
            tooltip.style.visibility = 'invisible';
            tooltip.style.opacity = '0';
        }
    }
});