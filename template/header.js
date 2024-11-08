document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector(".menu-toggle button");
    const dropdownContent = document.querySelector(".dropdown-content");

    menuToggle.addEventListener("click", function() {
      // Basculer l'affichage du menu avec la classe .show
      dropdownContent.classList.toggle("show");

      // Basculer entre icônes menu et croix
      if (dropdownContent.classList.contains("show")) {
        menuToggle.textContent = 'x'; // Icône de croix
      } else {
        menuToggle.textContent = '☰'; // Icône de menu
      }
    });
  });