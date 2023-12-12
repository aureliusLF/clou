// création de la pop up de la page d'acceuil
const popup_container = document.querySelector(".popup_container");
const popupoverlay = document.querySelector(".popupoverlay");
const access = document.querySelector(".access");
const burger_container = document.querySelector(".burger-container");
const banniere = document.querySelector("#banniere");
access.addEventListener("click", accessfuntion)
function accessfuntion() {
  popup_container.classList.toggle("active")
  popupoverlay.classList.toggle("active")
  burger_container.classList.toggle("active")
  banniere.classList.toggle("active")

}











