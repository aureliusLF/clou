<?php
session_start();

// Charger les données du fichier user.json
$users = json_decode(file_get_contents("user.json"), true);

// Récupérer les informations de connexion fournies par l'utilisateur
$login = $_POST['login'];
$password = $_POST['pwd'];

// Initialiser une variable pour vérifier si les informations de connexion sont correctes
$authenticated = false;

// Vérifier si le login et le mot de passe correspondent à ceux enregistrés dans le fichier user.json
foreach ($users as $user) {
    if ($user['login'] == $login && $user['pwd'] == $password) {
        $authenticated = true;
        break;
    }
}

// Si les informations de connexion sont correctes, créer une session pour l'utilisateur
if ($authenticated) {
    $_SESSION['user'] = [
        'login' => $login,
        'pwd' => $password
    ];
    $_SESSION['produitsPanier'] = [];
    // Rediriger l'utilisateur vers la page d'accueil 
    header("Location: index.php");
} else {
    // Afficher un message d'erreur si les informations de connexion sont incorrectes
    echo "Erreur: Les informations de connexion sont incorrectes. Veuillez <a href='connexion.php'>réessayer</a>.";
}
