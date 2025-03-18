const images = ["../../img/Test/IMG-20250318-WA0001.jpg","../../img/Test/IMG-20250318-WA0002.jpg", "../../img/Test/IMG-20250318-WA0003.jpg", "../../img/Test/IMG-20250318-WA0004.jpg"]; // Ajoute tes images ici
let index = 0;
const imgElement = document.getElementById("carousel-img");

function changeSlide(direction) {
    index = (index + direction + images.length) % images.length;
    imgElement.style.opacity = "0"; // Effet de fondu
    setTimeout(() => {
        imgElement.src = images[index];
        imgElement.style.opacity = "1";
    }, 300);
}

// Défilement automatique toutes les 2 secondes
setInterval(() => changeSlide(1), 4000);
