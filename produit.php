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
  <link rel="stylesheet" href="css/fritcepage.css">
</head>
<div class="popupoverlay"></div>
<?php
include_once "header.php";
?>

<div class="popupoverlay "></div>
<?php
$json = file_get_contents('fichier.json');
$_SESSION['categorie'] = json_decode($json, true);

$categorie = $_GET['cat'];
$current_category_info = $_SESSION['categorie'][$categorie];
function getCouleur($categorie)
{
  switch ($categorie) {
    case 'merlot':
    case 'chardonnay':
    case 'pinotnoir':
    case 'sauvignon':
      return 'rgb(5, 88, 15);'; // Rouge foncé
      break;
    case 'nerodavola':
    case 'glera':
    case 'sangoviese':
    case 'moscato':
      return '#6d071a'; // Vert foncé
      break;
  }
}
$couleur = getCouleur($categorie);

?>
<div class="container" style="background-color:<?php echo $couleur; ?>">
  <h2 class="titre categorie-titre"><?php echo $current_category_info['titre']; ?></h2>
  <p class="categorie-description"><?php echo $current_category_info['description']; ?></p>

</div>
<h2 class="titreproduit"> Produits</h2>
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
  <?php
