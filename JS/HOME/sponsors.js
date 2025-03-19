document.addEventListener("DOMContentLoaded", function() {
    const carouselTrack = document.querySelector(".carousel-track");
    const sponsors = document.querySelectorAll(".carousel-track img");
    const totalSponsors = sponsors.length;
    const visibleSponsors = 3;
    let currentIndex = 0;

    function moveCarousel() {
      currentIndex = (currentIndex + 1) % totalSponsors;
      const offset = -currentIndex * 170;
      carouselTrack.style.transform = `translateX(${offset}px)`;
    }

    setInterval(moveCarousel, 3000);
  });