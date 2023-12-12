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
    <link rel="stylesheet" href="css/France.css">
</head>
<div class="popupoverlay"></div>
<?php
include_once "header.php";
?>

<div class="popupoverlay "></div>
<?php
  $json = file_get_contents('fichier.json');
  $_SESSION['categorie'] = json_decode($json, true);
  
  $categorie = "selection1";
  $current_category_info = $_SESSION['categorie'][$categorie];
  ?>
<!-- création du titre -->
<div class="lafrance">

    <div class="container1">
        <h1 class="titre1">La France</h1>
        <p id="citation">"La France sans le vin n'est que sous-france"</p>
        <img src="assets/les-vignobles-et-leurs-secrets_alohamalakhov.jpg" alt="vignoble_francais">
    </div>
</div>
<!-- deuxieme case  -->
<div class="histoire">
    <div class="container2">
        <h2 class="titre2">La france et le vin</h2>
        <p>On dit souvent que la france est le "pays du vin". En effet cette tradition et plus que millénaire
            dans notre pays et aujourd'hui nous sommes le 3éme plus gros consomateurs et les 2eme plus gros producteurs.
            Cette histoire millénaire nous a ainsi legué des vin d'exeptions et nous vous proposons certains d'entre eux dans notre boutique!

        </p>
    </div>

</div>
<br>
<!-- rebrique cépage  -->
<h2 class="noscep">Nos cépages</h2>
<div class="cepage">

    <ul class="cepgrid">

        <a href="produit.php?cat=merlot" class="cep cep1">
            <li>Merlot</li>
        </a>
        <a href="produit.php?cat=pinotnoir" class="cep cep2">
            <li>Pinot Noir</li>
        </a>
        <a href="produit.php?cat=chardonnay" class="cep cep3">
            <li>Chardonnay</li>
        </a>
        <a href="produit.php?cat=sauvignon" class="cep cep4">
            <li>Cabernet Sauvignon</li>
        </a>

    </ul>
</div>
<!-- rebrique promo -->
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