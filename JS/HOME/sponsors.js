const track = document.querySelector(".carousel-track");
const images = document.querySelectorAll(".carousel-track img");
const imageWidth = images[0].clientWidth + 20; // Largeur d'une image + gap
let index = 0;

function changeSlide2(direction) {
    index += direction;
    if (index < 0) {
        index = images.length - 3; // Revient à la fin
    } else if (index > images.length - 3) {
        index = 0; // Revient au début
    }
    track.style.transform = `translateX(${-index * imageWidth}px)`;
}

// Défilement automatique toutes les 3 secondes
setInterval(() => changeSlide2(1), 3000);
