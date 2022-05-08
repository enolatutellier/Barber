deroulant=document.getElementsByClassName('deroulant');
sousMenu=document.getElementsByClassName('sous_menu')
overlay=document.getElementById('overlay');

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

overlay.onclick = function(){
    overlay.style.display = 'none';
    for(let i = 0 ; i<deroulant.length; i++){
        sousMenu[i].style.display = 'none';
    }
}
    

