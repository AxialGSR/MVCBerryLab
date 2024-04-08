document.addEventListener("DOMContentLoaded", function() {
    // Récupération du bouton "Haut de page"
    var scrollToTopButton = document.querySelector(".scroll-to-top-button");

    // Ajout d'un événement de clic sur le bouton
    scrollToTopButton.addEventListener("click", function() {
        // Animation de défilement vers le haut de la page
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    // Affichage ou masquage du bouton en fonction du défilement de la page
    window.addEventListener("scroll", function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });
});