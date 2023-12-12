<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <title> Rouge&Blanc</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/acceuil.css">
    <link rel="stylesheet" href="css/fritcepage.css">

</head>
<div class="popupoverlay "></div>
<?php

include_once "header.php";
?>
<link rel="stylesheet" href="css/acceuil.css">
<div class="popup_container">


    <div class="popup">
        <form>
            <fieldset>


                <label class="demande"> Je suis majeur</label>

                <div class="boutonn">
                    <button type="submit" class="access">
                        <label value="Connexion"> Oui </label>
                        <br>
                    </button>
                    <button type="reset" class="annuler">
                        <label value="annuler"><a href="https://www.legifrance.gouv.fr/codes/id/LEGISCTA000006171207" class="Non">Non</a> </label>
                        <br>
                    </button>

                </div>
            </fieldset>
        </form>
    </div>
</div>
<!-- fin -->
<!-- lien vers l'Italie -->
<div class="l_italie">
    <a href="Italie.php">
        <div class="container1">
            <h1 class="titre1">L'Italie</h1>
            <p id="citation">“Une barrique de vin peut réaliser plus de miracles qu'une église pleine de
                saints.” (Proverbe italien)</p>
            <img src="assets/vignoble_toscane.jpeg" alt="vignoble_francais">
        </div>
    </a>
</div>
<!-- lien vers la France  -->
<div class="lafrance">
    <a href="France.php">
        <div class="container3">
            <h1 class="titre1">La France</h1>
            <p id="citation2">"La France sans le vin n'est que sous-france"</p>
            <img src="assets/les-vignobles-et-leurs-secrets_alohamalakhov.jpg" alt="vignoble_francais">
        </div>
    </a>
</div>

<!-- création de la case promotion -->
<?php
include_once "promotion.php";
?>
<script src="js/test3.js"></script>
<script src="js/test1.js"></script>
<!-- création du footer avec toute les information dedans -->
<?php
include_once "footer.php";
?>