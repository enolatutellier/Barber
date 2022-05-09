let deroulant=document.getElementsByClassName('deroulant');
let sousMenu=document.getElementsByClassName('sous_menu')
let overlay=document.getElementById('overlay');
let quitter=document.getElementById('quitter_menu');

for(let i=0; i < deroulant.length; i++){
    deroulant[i].onclick = function(e){
        if(e.target == deroulant[i].firstElementChild){   
            for(let j=1; j<deroulant.length; j++){
                sousMenu[j].style.display = 'none';
            }
            if (sousMenu[i].style.display == 'flex'){
                sousMenu[i].style.display = 'none';
                if(i==0){
                    overlay.style.display = 'none';
                }
            }else{
                sousMenu[i].style.display = 'flex';
                if(i==0){
                    overlay.style.display = 'block';
                }
            }
        }
    } 
}

quitter.onclick=function(){
    overlay.style.display = 'none';
    for(let i = 0 ; i<deroulant.length; i++){
        sousMenu[i].style.display = 'none';
    }
}

overlay.onclick = function(){
    overlay.style.display = 'none';
    for(let i = 0 ; i<deroulant.length; i++){
        sousMenu[i].style.display = 'none';
    }
}
    

