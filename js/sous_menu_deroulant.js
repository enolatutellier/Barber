let deroulant=document.getElementsByClassName('deroulant');
let deroulantBurger=document.getElementsByClassName('deroulant_burger');
let deroulantArticle=document.getElementsByClassName('deroulant_article');
let sousMenu=document.getElementsByClassName('sous_menu');
let sousMenuBurger=document.getElementsByClassName('sous_menu_burger');
let sousMenuArticle=document.getElementsByClassName('sous_menu_article');
let overlay=document.getElementById('overlay');
let quitter=document.getElementById('quitter_menu');


for(let i=0; i < deroulant.length; i++){
    deroulant[i].onclick = function(e){
        if(e.target == deroulant[i].firstElementChild){   
            
            if (sousMenu[i].style.display == "flex"){
                sousMenu[i].style.display = 'none';
                if(i==0 || i==1){
                    overlay.style.display = 'none';
                }
            }else{
                for(let j=3; j<deroulant.length; j++){
                    sousMenu[j].style.display = 'none';
                }
                for(let j=0; j<deroulantBurger.length; j++){
                    sousMenuBurger[j].style.display = 'none';
                }
                for(let j=0; j<deroulantArticle.length; j++){
                    sousMenuArticle[j].style.display = 'none';
                }
                sousMenu[i].style.display = 'flex';
                if(i==0 || i==1 || i==2){
                    overlay.style.display = 'block';
                }
            }
        }
    } 
}

for(let i=0; i < deroulantBurger.length; i++){
    deroulantBurger[i].onclick = function(e){
        if(e.target == deroulantBurger[i].firstElementChild){   
            if (sousMenuBurger[i].style.display == 'flex'){
                sousMenuBurger[i].style.display = 'none';
            }else{
                for(let j=0; j<deroulantBurger.length; j++){
                    sousMenuBurger[j].style.display = 'none';
                }
                for(let j=0; j<deroulantArticle.length; j++){
                    sousMenuArticle[j].style.display = 'none';
                }
                sousMenuBurger[i].style.display = 'flex';
            }
        }
    } 
}

for(let i=0; i < deroulantArticle.length; i++){
    deroulantArticle[i].onclick = function(e){
        if(e.target == deroulantArticle[i].firstElementChild){   
            
            if (sousMenuArticle[i].style.display == 'flex'){
                sousMenuArticle[i].style.display = 'none';
            }else{
                for(let j=0; j<deroulantArticle.length; j++){
                    sousMenuArticle[j].style.display = 'none';
                }
                sousMenuArticle[i].style.display = 'flex';
            }
        }
    } 
}

quitter.onclick=function(){
    overlay.style.display = 'none';
    for(let i = 1 ; i<deroulant.length; i++){
        sousMenu[i].style.display = 'none';
    }
}

overlay.onclick = function(){
    overlay.style.display = 'none';
    for(let i = 0 ; i<deroulant.length; i++){
        sousMenu[i].style.display = 'none';
    }
    for(let i = 0 ; i<deroulantBurger.length; i++){
    sousMenuBurger[i].style.display = 'none';
    }
    for(let i = 0 ; i<deroulantArticle.length; i++){
        sousMenuArticle[i].style.display = 'none';
    }
}
    

