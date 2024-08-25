function addFilter() {
    var img = document.getElementById("miImagen");
    img.style.filter = "grayscale(100%) brightness(50%)";
   }

document.addEventListener("DOMContentLoaded", function() {
    const projectCards = document.querySelectorAll("#proyectos .card");

    projectCards.forEach(card => {
        card.addEventListener("mouseover", function() {
            card.style.transform = "scale(1.05)";
            card.style.boxShadow = "0 10px 20px rgba(0, 0, 0, 0.2)";
        });

        card.addEventListener("mouseout", function() {
            card.style.transform = "scale(1)";
            card.style.boxShadow = "none";
        });
    });
});

const backToTopBtn = document.getElementById("back-to-top");

window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
};

backToTopBtn.addEventListener("click", function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});


