

document.querySelectorAll('.produit, .promo').forEach(produit => {

  var nbclick = 0;
  const ajouterButton = produit.querySelector(".ajouter");
  const boutonRetirer = produit.querySelector(".retirer");
  // var ajouterAuPanierBtn = document.querySelector(".ajouter_au_panier");



  const stock = produit.getElementsByClassName("stock")[0].textContent;
  var stock1 = produit.getElementsByClassName("stock")[0].textContent;
   const afficherstock = document.querySelector(".stocklook");
   const stock_container = produit.querySelector(".stock_container");
   const ajouterAuPanierBtn = produit.querySelector(".ajouter_au_panier");


function afficher() {
  stock_container.classList.toggle("active");

  if (stock_container.classList.contains("active")) {
    document.querySelector(".stocklook").textContent = "Cacher le stock";
  } else {
    document.querySelector(".stocklook").textContent = "Afficher le stock";
  }
}
  
   afficherstock.addEventListener("click", afficher);


  function comptage() {
    if (nbclick < stock) {
      nbclick++;
      stock1--;
      produit.querySelector(".nbclick").textContent = nbclick;
      produit.getElementsByClassName("stock")[0].textContent = stock1;
     
      if (nbclick >= 10 ) {
        ajouterAuPanierBtn.classList.add("active");
      }
    }
  }

  if (ajouterButton) {
    ajouterButton.addEventListener("click", comptage);
  }

   

  function enleverClic() {
    if (nbclick > 0) {
      nbclick--;
      stock1++;
      produit.querySelector(".nbclick").textContent = nbclick;
      produit.getElementsByClassName("stock")[0].textContent = stock1;
    }
    if (nbclick < 10 ) {
      ajouterAuPanierBtn.classList.remove("active");
    }
  }
  if (boutonRetirer) {
    boutonRetirer.addEventListener("click", enleverClic);
  }
  

})



// // fonction ouvrant la modale 




