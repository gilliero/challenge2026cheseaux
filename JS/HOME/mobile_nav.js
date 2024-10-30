document.getElementById("menuButton").addEventListener("click", function() {
    const dropdownContent = document.getElementById("dropdownContent");
    const menuButton = document.getElementById("menuButton");
    
    dropdownContent.classList.toggle("show");

    if (dropdownContent.classList.contains("show")) {
        menuButton.innerHTML = "&#10006;"; // X icon
    } else {
        menuButton.innerHTML = "&#9776;"; // Menu icon
    }
});
