<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <title> Rouge&Blanc</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/fritcepage.css">
    <link rel="stylesheet" href="css/Italie.css">
</head>
<div class="popupoverlay"></div>
<?php
include_once "header.php";
?>

<div class="popupoverlay "></div>
<?php
  $json = file_get_contents('fichier.json');
  $_SESSION['categorie'] = json_decode($json, true);
  
  $categorie = "selection2";
  $current_category_info = $_SESSION['categorie'][$categorie];
  ?>
<div class="l_italie">
    <div class="container1">
        <h1 class="titre1">L'Italie</h1>
        <p id="citation">“Une barrique de vin peut réaliser plus de miracles qu'une église pleine de saints.” (Proverbe italien)</p>
        <img src="assets/vignoble_toscane.jpeg" alt="vignoble_francais">
    </div>
</div>
<div class="histoire">
    <div class="container2">
        <h2 class="titre2">Le vin et l'Italie</h2>
        <p>
            La viticulture en Italie remonte à la plus haute Antiquité. Les Romains et avant eux les Étrusques
            cultivaient la vigne. Les Grecs avaient donné au territoire le surnom d'Œnotria signifiant la terre du vin.
            Aujourd'hui la botte mediteranéenne est la plus grosse productrice et la 1ere consommatrice au monde. Nous pouvons donc grâce
            à ce patrimoine gigantesque vous proposer des produits d'exeptions provenants de 4 des plus grands cépages d'Italie.

        </p>
    </div>

</div>
<br>
<h2 class="noscep">Nos cépages</h2>
<div class="cepage">

    <ul class="cepgrid">

        <a href="produit.php?cat=sangiovese" class="cep cep1">
            <li>le Sangiovese</li>
        </a>
        <a href="produit.php?cat=nerodavola" class="cep cep2">
            <li>Nero d'Avola</li>
        </a>
        <a href="produit.php?cat=glera" class="cep cep3">
            <li>Glera</li>
        </a>
        <a href="produit.php?cat=moscato" class="cep cep4">
            <li>Moscato</li>
        </a>

    </ul>
</div>

<h2 class="titreproduit"> Notre selection</h2>
<div class="product">

    <ul class="produitgrid">
    <?php
    
      include_once "functionproduit.php";
        ?>
    </ul>
</div>
< <!-- fin -->
    <?php
    include_once "promotion.php";
    ?>
    <script src="js/test1.js"></script>
    <?php
    include_once "footer.php";
    ?>