// Codice per inserire l'attributo _blank ai link
document.addEventListener('DOMContentLoaded', function(){
    // seleziono i link non presenti in nav
 // const links = document.querySelectorAll('a:not(nav a)');

 // for(let i=0;i <links.length; i++){
 //     links[i].addEventListener('click',function(event){
 //         event.preventDefault();
 //         window.open(this.href, '_blank');
 //     });
 // }

    // Seleziona l'icona burger e il menu
    const burgerMenu = document.getElementById('burger-menu');
    const navMenu = document.getElementById('nav-menu');

    // Aggiunge un evento di click all'icona del menu
    burgerMenu.addEventListener('click', (event) => {
        // Toggle per aggiungere/rimuovere la classe "active" su burger e menu
        burgerMenu.classList.toggle('active');
        navMenu.classList.toggle('active');
        event.stopPropagation(); // Impedisce la propagazione del click al documento
    });

    document.addEventListener('click',(event) => {
        if(burgerMenu.classList.contains('active') && navMenu.classList.contains('active') && !event.target.closest('.nav-menu')){
            burgerMenu.classList.remove('active');
            navMenu.classList.remove('active');
        }
    })
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(window.getComputedStyle(burgerMenu).display === 'flex'){
    // menu a tendina
    const dropdown = document.getElementById('dropdown');
    const dropdownContent = document.getElementById('dropdown-content');

    dropdown.addEventListener('click', (event) => {
        dropdownContent.classList.toggle('active');
        event.stopPropagation(); // Impedisce la propagazione del click al documento
    });

    document.addEventListener('click', (event) => {
        if(dropdownContent.classList.contains('active')){
            dropdownContent.classList.remove('active');
        }
    });
} else { 
    console.log("ciao burger-menu ha display none")   
    const menuButton = document.getElementById('dropdown');
    const menuItems = document.getElementById('dropdown-content');
    let closeMenuTimeout;

    // Funzione per mostrare il menu
    menuButton.addEventListener('mouseenter', function () {
        clearTimeout(closeMenuTimeout);  // Annulla qualsiasi chiusura in corso
        menuItems.classList.add('active');  // Mostra il menu
    });

    // Quando il mouse lascia il menu o il pulsante, imposta un ritardo per la chiusura
    menuButton.addEventListener('mouseleave', function () {
        closeMenuTimeout = setTimeout(function () {
            menuItems.classList.remove('active');  // Nascondi il menu con ritardo
        }, 2000);  // Ritardo di 2s prima di chiudere il menu
    });
}

// ::::::::::::::::::::::::::: SEZIONE PORTFOLIO :::::::::::::::::::::::::::
    const images = document.getElementsByTagName('img');
    const portfolio = document.getElementById('portfolio');

    // Converti HTMLCollection in un array
    Array.from(images).forEach(element => {
        portfolio.appendChild(element);
});
///////////////////////////////////////////////////////////
});



