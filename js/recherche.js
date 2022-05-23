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

let recherche2 = document.getElementById('recherche2').firstElementChild;
let tooltip2 = document.getElementById("longueur_minimum2");

recherche2.addEventListener("keypress", function (e){
    if(e.key === "Enter" && recherche2.value.length >= 3){
        window.location.href = 'recherche.php?recherche='.concat(recherche2.value);
    } else{
        if (e.key === "Enter" && recherche2.value.length < 3){
            tooltip2.style.visibility = 'visible';
            tooltip2.style.opacity = '1';
        }else{
            tooltip2.style.visibility = 'invisible';
            tooltip2.style.opacity = '0';
        }
    }
});