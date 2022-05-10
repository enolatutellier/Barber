function ajouter(){
    if(document.getElementById("tableau_ajout").style.display == 'block'){
        document.getElementById("tableau_ajout").style.display = 'none';
        document.getElementById("ajouter").style.backgroundColor = '';
    }else{
        document.getElementById("tableau_ajout").style.display = 'block';
        document.getElementById("ajouter").style.backgroundColor = 'lightblue';
        document.getElementById("tableau_modif").style.display = 'none';
        document.getElementById("modifier").style.backgroundColor = '';   
        document.getElementById("tableau_supp").style.display = 'none';
        document.getElementById("supprimer").style.backgroundColor = '';  
    }
}
function modifier(){
    if(document.getElementById("tableau_modif").style.display == 'block'){
        document.getElementById("tableau_modif").style.display = 'none';
        document.getElementById("modifier").style.backgroundColor = '';    
    }else{
        document.getElementById("tableau_modif").style.display = 'block';
        document.getElementById("modifier").style.backgroundColor = 'lightblue'; 
        document.getElementById("tableau_ajout").style.display = 'none';
        document.getElementById("ajouter").style.backgroundColor = '';
        document.getElementById("tableau_supp").style.display = 'none';
        document.getElementById("supprimer").style.backgroundColor = '';  
    }
}
function supprimer(){
    if(document.getElementById("tableau_supp").style.display == 'block'){
        document.getElementById("tableau_supp").style.display = 'none';
        document.getElementById("supprimer").style.backgroundColor = '';    
    }else{
        document.getElementById("tableau_supp").style.display = 'block'; 
        document.getElementById("supprimer").style.backgroundColor = 'lightblue';     
        document.getElementById("tableau_modif").style.display = 'none';
        document.getElementById("modifier").style.backgroundColor = '';   
        document.getElementById("tableau_ajout").style.display = 'none';
        document.getElementById("ajouter").style.backgroundColor = '';
    }    
}