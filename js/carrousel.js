let monCarrousel = document.getElementById('carrousel');
let monInterval;

(function(){
    if(window.innerWidth > 1024){        
        for(let i=0; i<monCarrousel.children.length; i++){
            monCarrousel.children[i].style.display = 'block';            
        }
        monInterval = setInterval(function(){
            let tmp = monCarrousel.firstElementChild.cloneNode(true);
            monCarrousel.insertAdjacentElement('beforeend', tmp);
            for(let i=0; i<monCarrousel.children.length; i++){
                monCarrousel.children[i].style.animation = '2s ease-in both transition-left';
            }
            setTimeout(function(){
                for(let i=0; i<monCarrousel.children.length; i++){
                    monCarrousel.children[i].style.animation = '';
                }
                monCarrousel.firstElementChild.remove()}, 9000);
        }, 10000);
    }else{
        let random = Math.floor(Math.random() * monCarrousel.childElementCount);
        monCarrousel.children[random].style.display = 'block';
        monCarrousel.children[random].style.borderRadius = '15px';
        monCarrousel.children[random].style.width = '100%';
        monCarrousel.style.justifyContent = 'center';
        monCarrousel.style.height = 'auto';
        monCarrousel.style.width = '70%';
    }
})()