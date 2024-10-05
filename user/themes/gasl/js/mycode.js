document.addEventListener('DOMContentLoaded', function () {
    // Seleziona l'icona burger e il menu
    const burgerMenu = document.getElementById('burger-menu');
    const navMenu = document.getElementById('nav-menu');
    const dropdown = document.getElementById('dropdown');
    const dropdownContent = document.getElementById('dropdown-content');

    // Variabili per memorizzare lo stato degli event listener
    let isMobile = false;

    // Funzione per rimuovere tutti gli event listener precedenti
    function removeListeners() {
        // Rimuovi i listener del menu burger
        burgerMenu.removeEventListener('click', toggleBurgerMenu);
        document.removeEventListener('click', closeBurgerMenuOutsideClick);

        // Rimuovi i listener del dropdown in modalità mobile
        dropdown.removeEventListener('click', toggleDropdown);
        document.removeEventListener('click', closeDropdownOutsideClick);

        // Rimuovi i listener del dropdown in modalità desktop
        dropdown.removeEventListener('mouseenter', openDropdownHover);
        dropdown.removeEventListener('mouseleave', closeDropdownHover);
    }

    // Funzione per gestire il comportamento del menu
    function handleMenu() {
        // Rimuovi i listener precedenti
        removeListeners();

        // Verifica se il burger menu è attivo (display: flex)
        if (window.getComputedStyle(burgerMenu).display === 'flex') {
            isMobile = true;
            // Logica per il menu a tendina con burger menu attivo
            console.log("Modalità burger attiva");

            // Evento di click sul burger menu
            burgerMenu.addEventListener('click', toggleBurgerMenu);

            // Chiude il menu burger se si clicca fuori
            document.addEventListener('click', closeBurgerMenuOutsideClick);

            // Gestisce il dropdown nel menu burger
            dropdown.addEventListener('click', toggleDropdown);

            // Chiude il dropdown se si clicca fuori
            document.addEventListener('click', closeDropdownOutsideClick);
        } else {
            isMobile = false;
            // Logica per il menu normale (non burger)
            console.log("Modalità menu normale");

            // Evento di hover per aprire e chiudere il dropdown nel menu normale
            dropdown.addEventListener('mouseenter', openDropdownHover);
            dropdown.addEventListener('mouseleave', closeDropdownHover);
        }
    }

    // Funzioni per il menu burger
    function toggleBurgerMenu(event) {
        burgerMenu.classList.toggle('active');
        navMenu.classList.toggle('active');
        event.stopPropagation(); // Impedisce la propagazione del click al documento
    }

    function closeBurgerMenuOutsideClick(event) {
        if (burgerMenu.classList.contains('active') && navMenu.classList.contains('active') && !event.target.closest('.nav-menu')) {
            burgerMenu.classList.remove('active');
            navMenu.classList.remove('active');
        }
    }

    // Funzioni per il dropdown in modalità mobile
    function toggleDropdown(event) {
        dropdownContent.classList.toggle('active');
        event.stopPropagation(); // Impedisce la propagazione del click al documento
    }

    function closeDropdownOutsideClick(event) {
        if (dropdownContent.classList.contains('active')) {
            dropdownContent.classList.remove('active');
        }
    }

    // Funzioni per il dropdown in modalità desktop (hover)
    function openDropdownHover() {
        clearTimeout(closeMenuTimeout); // Annulla qualsiasi chiusura in corso
        dropdownContent.classList.add('active'); // Mostra il menu
    }

    function closeDropdownHover() {
        closeMenuTimeout = setTimeout(function () {
            dropdownContent.classList.remove('active'); // Nascondi il menu con ritardo
        }, 2000); // Ritardo di 2s prima di chiudere il menu
    }

    // Variabile per gestire il ritardo nella chiusura del menu in modalità desktop
    let closeMenuTimeout;

    // Funzione per chiudere il dropdown quando si passa da mobile a desktop
    function closeDropdownOnResize() {
        if (!isMobile && dropdownContent.classList.contains('active')) {
            dropdownContent.classList.remove('active');
        }
    }
    // Chiamata iniziale alla funzione handleMenu
    handleMenu();

    // Rileva il ridimensionamento della finestra e aggiorna il comportamento del menu
    window.addEventListener('resize', function () {
        const wasMobile = isMobile;
        handleMenu();
        // Assicurati di chiudere il menu se si passa da mobile a desktop
        if (wasMobile && !isMobile) {
            burgerMenu.classList.remove('active');
            navMenu.classList.remove('active');
            closeDropdownOnResize(); // Chiudi il dropdown
        }
    });

    // ::::::::::::::::::::::::::: SEZIONE PORTFOLIO :::::::::::::::::::::::::::
    const images = document.getElementsByTagName('img');
    const portfolio = document.getElementById('portfolio');

    // Converti HTMLCollection in un array e aggiungi le immagini al portfolio
    Array.from(images).forEach(element => {
        portfolio.appendChild(element);
    });


    //  :::::::::::::::::::: TITOLO APRIBILE :::::::::::::::::::::::::
    document.querySelectorAll('h2').forEach(function (h2) {
        let nextElementSet = h2.nextElementSibling;
        while (nextElementSet && nextElementSet.tagName !== 'H2') {
            nextElementSet.classList.add('hidden');
            nextElementSet = nextElementSet.nextElementSibling;
        }
    });
    // document.querySelectorAll('h2').forEach(function (h2) {
    //     h2.addEventListener('click', function () {
    //         let nextElement = this.nextElementSibling;
    //         while (nextElement && nextElement.tagName !== 'H2') {
    //             if (nextElement.classList.contains('hidden')) {
    //                 nextElement.classList.remove('hidden');
    //             } else {
    //                 nextElement.classList.add('hidden');
    //             }
    //             nextElement = nextElement.nextElementSibling;
    //         }
    //     });
    // });

    document.querySelectorAll('h2').forEach(function (h2) {
        h2.addEventListener('click', function () {
            let nextElement = this.nextElementSibling;
            while (nextElement && nextElement.tagName !== 'H2') {
                if (nextElement.classList.contains('hidden')) {
                    nextElement.classList.remove('hidden');
                    nextElement.classList.add('slide-down');
                    nextElement.classList.remove('slide-up');
                } else {
                    nextElement.classList.add('slide-up');
                    nextElement.classList.remove('slide-down');
                    setTimeout(function (element) {
                        element.classList.add('hidden');
                    }, 500, nextElement); // La durata deve corrispondere alla durata dell'animazione
                }
                nextElement = nextElement.nextElementSibling;
            }
        });
    });
    
    

});

