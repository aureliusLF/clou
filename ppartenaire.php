<!-- <link rel="stylesheet" href="css/frcepage1.css"> -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <title> Rouge&Blanc</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/ppartenaire.css">
</head>
<?php
include_once "header.php";
?>

   
        

 <h1 class="titrepartenaire">Nos Partenaires</h1>
 <div class="containermax">
 <div class=" container containermif">
    <img src="assets/Logo MIF officiel .jpg" alt="logomif">
    <h2>La MIF</h2>
    <p>L'association Made in France est une association du campus de Sciences Po 
        Saint Germain en Laye ayant comme objectif de promouvoir la culture francaise par le biais de 
        sa gastronomie et donc par le biais de ce breuvage qui nous passionne tous. Nous avons donc choisis 
        de nous associer à eux cette année afin de les aider dans leurs quête.
    </p>
   </div>


   <div class="container containervignamaggio">
    <img src="assets/logovignamaggio.jpg" alt="logovignamaggio">
    <h2>Vignamaggio</h2>
    <p>Niché entre forêts et ruisseaux sur les collines du Chianti,
        Vignamaggio est une ferme biologique avec une cave à vin historique en activité depuis 1404. Le domaine s'étend sur plus de 400 hectares,
         avec des vignes, des jardins potagers et ornementaux et un goût de la dolce vita pour qui le désire. 
        Nous avons donc choisis de nous associer à cette ferme d'exeption afin de vous fournir chaque mois un nouveau vin d'exeption
    </p>
   </div>
 </div> 
    
    </main>
    <?php 
        include_once "footer.php";
        ?>