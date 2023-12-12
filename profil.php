<?php
session_start();

// Charger les données du fichier user.json
$users = json_decode(file_get_contents("user.json"), true);

// Trouver les données de l'utilisateur connecté
$currentUser = null;
foreach ($users as $user) {
    if ($user['login'] == $_SESSION['user']['login']) {
        $currentUser = $user;
        break;
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <title> Rouge&Blanc</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/transitioncep.css">
<link rel="stylesheet" href="css/connexion.css">
<script src="js/Creationcompte.js" defer></script>
</head>
<?php
include_once "header.php";
?>
    <h1 class="titreformu">Profil utilisateur</h1>
    <div class="profile-container">
        <div>
            <h2>Informations personnelles</h2>
            <p><strong>Nom d'utilisateur: </strong><?php echo htmlspecialchars($currentUser['login']); ?></p>
            <p><strong>Adresse email: </strong><?php echo htmlspecialchars($currentUser['email']); ?></p>
            <p><strong>Prénom: </strong><?php echo htmlspecialchars($currentUser['prenom']); ?></p>
            <p><strong>Nom: </strong><?php echo htmlspecialchars($currentUser['nom']); ?></p>
            <p><strong>Date de naissance: </strong><?php echo htmlspecialchars($currentUser['date_naissance']); ?></p>
            <p><strong>Adresse: </strong><?php echo htmlspecialchars($currentUser['adresse']); ?></p>
            <p><strong>telephone: </strong><?php echo htmlspecialchars($currentUser['telephone']); ?></p>
            <form action="logout.php" method="POST">
        <button type="submit" class="logout-button">Se déconnecter</button>
    </form>
        </div>
    </div>


<?php
include_once "footer.php";
?>