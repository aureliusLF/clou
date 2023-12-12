


// création du zoom pour les articles

 
  const modales = document.querySelectorAll('.modale');
  const croixs = document.querySelectorAll('.croix');
  const overlay = document.querySelector('.popupoverlay');
//  // fonction ouvrant la modale 
  modales.forEach((modale, index) => {
    const img = document.querySelectorAll(`.imgbase${index+1}`);

   img.forEach(i => i.addEventListener('click', () => {
    modale.classList.toggle('active');
   overlay.classList.toggle('active');
  }));
// // fonction activant la croix pour fermer la modale
   croixs[index].addEventListener('click', () => {
    modale.classList.toggle('active');
    overlay.classList.toggle('active');
   });
  });




// const produit = document.querySelectorAll('.produit','.promo');
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
   var addpanier = produit.querySelector(".ajouter_au_panier");


function afficher() {
  stock_container.classList.toggle("active");

  if (stock_container.classList.contains("active")) {
    document.querySelector(".stocklook").textContent = "Cacher le stock";
  } else {
    document.querySelector(".stocklook").textContent = "Afficher le stock";
  }
}
  
   afficherstock.addEventListener("click", afficher);


  // function comptage() {
  //   if (nbclick < stock) {
  //     nbclick++;
  //     stock1--;
  //     produit.querySelector(".nbclick").textContent = nbclick;
  //     produit.getElementsByClassName("stock")[0].textContent = stock1;
     
  //     if (nbclick >= 10 ) {
  //       ajouterAuPanierBtn.classList.add("active");
  //     }
  
  //   }
  // }
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

  
  if (ajouterAuPanierBtn) {
    ajouterAuPanierBtn.addEventListener("click", () => {
      afficherPopup(produit, nbclick);
    });
  }
  function afficherPopup(produit, nbclick) {
    const nomProduit = produit.querySelector(".description").textContent;
    const refProduit = produit.querySelector(".description").textContent.split("ref: ")[1].trim();
    const prixProduit = produit.querySelector(".prix").textContent;
  
    const queryString = `nom=${encodeURIComponent(nomProduit)}&ref=${encodeURIComponent(refProduit)}&prix=${encodeURIComponent(prixProduit)}&nbclick=${encodeURIComponent(nbclick)}`;
  
    fetch(`panier.php?${queryString}`, {
      method: "GET"
    })
      .then((response) => {
        if (response.ok) {
          return response.text();
        } else {
          throw new Error("Erreur lors de l'envoi de la requête GET");
        }
      })
      // .then((text) => {
      //   alert(`Article : ${nomProduit}\nNombre de produits choisis : ${nbclick}`);
      //        }
      //        )
      //        .catch((error) => {
      //         console.error("Erreur :", error);
      //        });
         }
//   function afficherPopup(produit, nbclick) {
//     console.log("afficherPopup est appelée");
//     const nomProduit = produit.querySelector(".description").textContent;
//   const refProduit = produit.querySelector(".description").textContent.split("ref: ")[1].trim();
//   const prixProduit = produit.querySelector(".prix").textContent;

//   const queryString = `nom=${encodeURIComponent(nomProduit)}&ref=${encodeURIComponent(refProduit)}&prix=${encodeURIComponent(prixProduit)}&nbclick=${encodeURIComponent(nbclick)}`;

//   fetch(`panier.php?${queryString}`, {
//     method: "GET"
//   })
//     .then((response) => {
//       if (response.ok) {
//         return response.text();
//       } else {
//         throw new Error("Erreur lors de l'envoi de la requête GET");
//       }
//     })
//     .then((text) => {
//       alert(`Article : ${nomProduit}\nNombre de clics : ${nbclick}`);
//     })
//     .catch((error) => {
//       console.error("Erreur :", error);
//     });
// }
  
  // function afficherPopup(produit, nbclick) {
  //   console.log("afficherPopup est appelée");
  //   const nomProduit = produit.querySelector(".description").textContent;
  //   const refProduit = produit.querySelector(".description").textContent.split("ref: ")[1].trim();
  //   const prixProduit = produit.querySelector(".prix").textContent;
  
  //   const xhttp = new XMLHttpRequest();
  //   xhttp.onreadystatechange = function () {
  //     if (this.readyState == 4 && this.status == 200) {
  //       alert(`Article : ${nomProduit}\nNombre de clics : ${nbclick}`);
  //     }
  //   };
  
  //   xhttp.open(
  //     "POST",
  //     "panier.php",
  //     xhttp.open("POST", "panier.php?test=post", true),
  //     true
      
  //   );
  //   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //   xhttp.send(`nom=${nomProduit}&ref=${refProduit}&prix=${prixProduit}&nbclick=${nbclick}`);
  // }
})
  
// function afficherPopup(produit, nbclick) {
//   const nomProduit = produit.querySelector(".description").textContent;
//   alert(`Article : ${nomProduit}\nNombre de clics : ${nbclick}`);
// }
  
// })









// function stockageProduits() {
//   const produits = document.querySelectorAll('.produit, .promo');
//   const productList = [];
//   produits.forEach(produit => {
//     const nbclick = produit.querySelector(".nbclick").textContent;
//     const nom = produit.querySelector(".description").textContent;
//     const prix = produit.querySelector(".prix").textContent;
//     const image = produit.querySelector("img").src;
//     const stock = produit.querySelector(".stock").textContent;
//     productList.push({
//       "nom": nom,
//       "prix": prix,
//       "image": image,
//       "stock": stock,
//       "quantite": nbclick
//     });
//   });
//   // Envoyer les données à une autre page PHP via une requête AJAX pour traitement et stockage
//   const url = "panier.php";
//   const data = new FormData();
//   data.append("produits", JSON.stringify(productList));

//   fetch(url, {
//       method: "POST",
//       body: data
//   }).then(response => response.text())
//   .then(data => {
//       console.log(data);
//   }).catch(error => {
//       console.error(error);
//   });
// }

// ...
// const ajouterAuPanierBtn = produit.querySelector(".ajouter_au_panier");

// function ajouterAuPanier() {
//     const produitId = produit.dataset.id;
//     const quantite = nbclick;

//     // Envoyer une requête AJAX au fichier PHP pour ajouter le produit au panier
//     fetch("ajouter_au_panier.php", {
//         method: "POST",
//         headers: {
//             "Content-Type": "application/x-www-form-urlencoded"
//         },
//         body: `produit_id=${produitId}&quantite=${quantite}`
//     })
//     .then(response => response.text())
//     .then(result => {
//         console.log(result);
//     })
//     .catch(error => {
//         console.error("Erreur:", error);
//     });
// }

// if (ajouterAuPanierBtn) {
//     ajouterAuPanierBtn.addEventListener("click", ajouterAuPanier);
// }
// ...







//  var nbclick = 0;
//  const ajouterButton = document.querySelector(".ajouter");
//  const boutonRetirer = document.querySelector(".retirer");



//  const stock = document.getElementsByClassName("stock")[0].textContent;
//  var stock1 = document.getElementsByClassName("stock")[0].textContent;
//  const afficherstock = document.querySelector(".stocklook")
//  const stock_container = document.querySelector(".stock_container")
//  afficherstock.addEventListener("click", afficher)
// function afficher(){
//   stock_container.classList.toggle("active")

//   if (stock_container.classList.contains("active")) {
//     document.querySelector(".stocklook").textContent = "Cacher le stock";
//   } else {
//     document.querySelector(".stocklook").textContent = "Afficher le stock";
//   }
// }


//  function comptage() {
//    if (nbclick < stock) {
//    nbclick++;
//    stock1--;
//    document.querySelector(".nbclick").textContent = nbclick;
//    document.getElementsByClassName("stock")[0].textContent = stock1}
//   }


//   if (ajouterButton) {
//     ajouterButton.addEventListener("click", comptage);
//   }
 
//  function enleverClic() {
//   if (nbclick > 0) {
//     nbclick--;
//     stock1++;
//     document.querySelector(".nbclick").textContent = nbclick;
//     document.getElementsByClassName("stock")[0].textContent = stock1
//    }
//  }
//  if (boutonRetirer) {
//    boutonRetirer.addEventListener("click", enleverClic);
//  }




