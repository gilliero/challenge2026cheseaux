document.addEventListener("DOMContentLoaded", function() {
  
  const menuToggle = document.querySelector("#menuToggleBtn"); // Cible le bouton directement
  const dropdownContent = document.querySelector(".dropdown-content");

  if (menuToggle && dropdownContent) { // Vérifie que les éléments existent
      menuToggle.addEventListener("click", function() {
          // Basculer l'affichage du menu avec la classe .show
          dropdownContent.classList.toggle("show");

          // Basculer entre icônes menu et croix
          if (dropdownContent.classList.contains("show")) {
              menuToggle.textContent = '✖'; // Icône de croix
          } else {
              menuToggle.textContent = '☰'; // Icône de menu
          }
      });
  } else {
      console.error("menuToggle or dropdownContent not found in the DOM.");
  }
});