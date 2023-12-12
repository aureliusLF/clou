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
    <link rel="stylesheet" href="css/panier.css">
    

    <!-- <link rel="stylesheet" href="test.css"> -->
    <script src="votre_fichier.js"></script>
</head>

<?php

 include_once "header.php";
 ?>
 
 <div class="container">
 <h1>Votre panier</h1>
  <?php
  session_start();

  if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
  }

  if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
    $produit = [
      'nom' => $_GET['nom'],
      'ref' => $_GET['ref'],
      'prix' => $_GET['prix'],
      'nbclick' => $_GET['nbclick']
    ];

    $produit['prix'] = floatval($produit['prix']) * intval($produit['nbclick']);

    array_push($_SESSION['panier'], $produit);

  } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Référence</th>";
    echo "<th>Prix total</th>";
    echo "<th>Nombre d'articles</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $total = 0;
    foreach ($_SESSION['panier'] as $index => $produit) {
      echo "<tr>";
      echo "<td>" . $produit['nom'] . "</td>";
      echo "<td>" . $produit['ref'] . "</td>";
      echo "<td>" . $produit['prix'] .  '€' . "</td>";
      echo "<td>" . $produit['nbclick'] . "</td>";
      echo "</tr>";
      $total += $produit['prix'];
    }
    echo "</tbody>";
    echo "</table>";
    echo "<div class='total'>Total : " . $total . '€' . "</div>";
  } else {
    echo "Erreur : méthode de requête non prise en charge.";
  }
  ?>
 <?php

?>



