// Sélectionne les boutons
const btnComité = document.getElementById("btnComité");
const btnResponsables = document.getElementById("btnResponsables");
const btnMembres = document.getElementById("btnMembres");
const btnTous = document.getElementById("btnTous");

// Fonction pour cacher les éléments avec animation et ajuster les autres
function hideWithAnimation(selectors) {
    const elementsToHide = document.querySelectorAll(selectors);
    const visibleElements = document.querySelectorAll('.show:not(' + selectors + ')');

    // Ajoute l'effet de glissement aux éléments qui restent visibles
    visibleElements.forEach(element => {
        element.classList.add("slide-up");
        setTimeout(() => {
            element.classList.remove("slide-up");
        }, 500);
    });

    // Applique l'animation de disparition aux éléments cachés
    elementsToHide.forEach(element => {
        element.classList.add("fade-out");

        // Après l'animation, cache l'élément
        setTimeout(() => {
            element.style.display = "none";
            element.classList.remove("fade-out");
        }, 600);
    });
}

// Fonction pour afficher les éléments avec animation
function showElements(selectors) {
    document.querySelectorAll(selectors).forEach(element => {
        if (element.style.display === "none" || element.style.display === "") {
            element.style.display = "block"; // Ré-affiche l'élément
            element.classList.add("fade-in"); // Applique l'animation d'apparition

            // Supprime l'animation après exécution pour éviter des bugs
            setTimeout(() => {
                element.classList.remove("fade-in");
            }, 600);
        }
    });
}

// Gestion des clics
btnComité.addEventListener("click", () => {
    hideWithAnimation("#membre, #responsable");
    showElements("#comité");
});

btnResponsables.addEventListener("click", () => {
    hideWithAnimation("#membre, #comité");
    showElements("#responsable");
});

btnMembres.addEventListener("click", () => {
    hideWithAnimation("#responsable, #comité");
    showElements("#membre");
});

btnTous.addEventListener("click", () => {
    showElements(".show"); // Ré-affiche tous les éléments avec animation
});
