    // Sélectionne les boutons
    const btnComité = document.getElementById("btnComité");
    const btnResponsables = document.getElementById("btnResponsables");
    const btnMembres = document.getElementById("btnMembres");
    const btnTous = document.getElementById("btnTous");

    // Sélectionne les éléments avec les IDs correspondants
    const tousElements = document.querySelectorAll('.show');

    // Fonction pour afficher uniquement le comité
    btnComité.addEventListener('click', () => {
        // Cache les éléments avec les IDs "membre" et "responsable"
        document.querySelectorAll('#membre, #responsable').forEach(element => {
            element.style.display = 'none';
        });
        
        // Affiche les éléments du comité
        document.querySelectorAll('#comité').forEach(element => {
            element.style.display = 'block';
        });
    });

    // Fonction pour afficher les responsables
    btnResponsables.addEventListener('click', () => {
        // Cache les éléments avec les IDs "membre" et "comité"
        document.querySelectorAll('#membre, #comité').forEach(element => {
            element.style.display = 'none';
        });

        // Affiche les éléments des responsables
        document.querySelectorAll('#responsable').forEach(element => {
            element.style.display = 'block';
        });
    });

    // Fonction pour afficher les membres
    btnMembres.addEventListener('click', () => {
        // Cache les éléments avec les IDs "responsable" et "comité"
        document.querySelectorAll('#responsable, #comité').forEach(element => {
            element.style.display = 'none';
        });

        // Affiche les éléments des membres
        document.querySelectorAll('#membre').forEach(element => {
            element.style.display = 'block';
        });
    });

    // Fonction pour afficher tous les éléments
    btnTous.addEventListener('click', () => {
        tousElements.forEach(element => {
            element.style.display = 'block';
        });
    });