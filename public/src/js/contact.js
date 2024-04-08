// gestion des choix formation//                
function afficheOptionF() {
  const select = document.querySelector("#formation");
  const valeur = select.value;
  let imageF, texteF;
  switch (valeur) {
    case "formation montage video":
      imageF = "./img/1(8.1).webp";
      texteF = "Découvrez les techniques de montage vidéo.";
    break;
    case "formation designspark 2D":
      imageF = "./img/1.png";
      texteF = "Apprenez à dessiner en 2D avec Designspark.";
    break;
    case "formation brodeuse numerique":
      imageF = "./img/1(3).webp";
      texteF = "Devenez un pro de la broderie numérique.";
    break;
    case "formation fraiseuse CNC":
      imageF = "./img/1(8.1).webp";
      texteF = "Apprenez à utiliser une fraiseuse CNC.";
    break;
    case "formation arduino":
      imageF = "./img/1(2).webp";
      texteF = "Découvrez l'univers de la programmation avec Arduino.";
    break;
    case "formation imprimante 3D":
      imageF = "./img/design3D.webp";
      texteF = "Imprimez en 3D grâce à notre formation.";
    break;
    default:
      imageF = "";
      texteF = "";
    }
document.getElementById("imageF").src = imageF;
document.querySelector("#texteF").textContent = texteF;
}
function afficheOptionO() {
  const select = document.querySelector("#outil");
  const valeur = select.value;
  let imageO, texteO;
  switch (valeur) {
    case "outil montage video":
      imageO = "./img/1(8.1).webp";
      texteO = "Découvrez le matériel de montage vidéo.";
    break;
    case "outil designspark 2D":
      imageO = "./img/1.png";
      texteO = "Découvrez l'outil Designspark.";
    break;
    case "outil brodeuse numerique":
      imageO = "./img/brodeuse.webp";
      texteO = "Découvrez la broderie numérique.";
    break;
    case "outil fraiseuse CNC":
      imageO = "./img/image1.webp";
      texteO = "Découvrez le matériel fraiseuse CNC.";
    break;
    case "outil arduino":
      imageO = "./img/arduino.webp";
      texteO = "Découvrez l'outil Arduino.";
    break;
    case "outil imprimante 3D":
      imageO = "./img/1(6).webp";
      texteO= "l'imprimante 3D.";
    break;
    default:
      imageO = "";
      texteO = "";
    }
document.getElementById("imageO").src = imageO;
document.querySelector("#texteO").textContent = texteO;
} 

//gestion du bouton de soumission 


 inputNom = document.getElementById('nom');
let inputPrenom = document.getElementById('prenom'); 
let inputEmail = document.getElementById('email');