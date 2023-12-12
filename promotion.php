<h2 class="titrepromo"> Promotions !</h2>
        <div class="promotion">

            <ul class="produitgrid">
           <?php
            $promos = [
["image" => "assets/merlot3.jpeg", "nom" => "Chateau Petrus", "ref" => "003", "prix" => "21,5€", "stock" => 4],
["image" => "assets/sauvignon3.jpeg","nom" => "UBY N°3", "ref" => "015", "prix" => "10,0€", "stock" => 7],
["image" => "assets/moscato3.jpeg", "nom" => "Asti Canti", "ref" => "031", "prix" => "9,0€", "stock" => 11],
["image" => "assets/sangiovese2.jpeg", "nom" => "Di Montalcino", "ref" => "018", "prix" => "31,0€", "stock" => 14]
            ];

foreach ($promos as $index => $promo) {
    echo '<div class="produit">';
    echo '<p class="stock_container">stock : <span class="stock" value="' . $promo["stock"] . '">' . $promo["stock"] . '</span></p>';
    echo '<li><img src="' . $promo["image"] . '" alt="' . $promo["nom"] . '" class="imgbase imgbase' . ($index + 5) . '">';
    echo '<div class="modale"><div class="croix croix' . ($index + 1) . '"><span class="line4 linecroix"></span><span class="line5 linecroix"></span></div><img src="' . $promo["image"] . '" class="imagemodale"></div></li>';
    echo '<p class="description">' . $promo["nom"] . '<br> ref: ' . $promo["ref"] . '</p>';
    echo '<p class="prix">' . $promo["prix"] . '</p>';
    echo '<div class="panier_produit">';
    echo '<div class="compteur"><button type="button" class="retirer">-</button><p>panier : <span class="nbclick">0</span></p><button type="button" class="ajouter">+</button></div><button class="ajouter_au_panier">Ajouter au panier</button></div>';
    echo '</div>';
}

?>
            </ul>

        </div>
        <div>
            <button class="stocklook">Afficher le stock</button>
        </div>


      
    </main>