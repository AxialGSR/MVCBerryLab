

//fonction pour le menu burger

function afficherNav() {
    var nav = document.getElementById("mobile-menu");
     if (nav.classList.contains("hidden")){
      nav.classList.remove("hidden");
     }else{
      nav.classList.add("hidden");
     }};
  
  // Ajouter un gestionnaire d'événements au bouton
  document.getElementById("burger-btn").addEventListener("click", afficherNav);

