let monCarrousel = document.getElementById('carrousel');
let monInterval;

(function(){
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
})()

