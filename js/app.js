// Récupérer l'élément "link" qui définit l'icône de l'onglet
const iconLink = document.querySelector("link[rel='icon']");

// Définir les images qui vont être utilisées pour l'animation
const activeImage = "moianime.jpg";
const inactiveImage = "cvlogo.png";

// Changer l'icône de l'onglet en fonction de la visibilité de la fenêtre
document.addEventListener("visibilitychange", () => {
  if (document.hidden) {
    iconLink.href = inactiveImage;
  } else {
    iconLink.href = activeImage;
  }
});