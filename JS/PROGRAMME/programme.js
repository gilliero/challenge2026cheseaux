document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".styled-button");
    const days = document.querySelectorAll("#Prog");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const day = this.textContent.trim();

            if (day === "TOUS") {
                days.forEach(dayDiv => dayDiv.style.display = "block");
            } else {
                days.forEach(dayDiv => {
                    dayDiv.style.display = dayDiv.classList.contains(day) ? "block" : "none";
                });
            }
        });
    });
});

