<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $civilite = trim($_POST['civilite']);
    $login = trim($_POST['login']);
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $confemail = trim($_POST['confemail']);
    $pwd = trim($_POST['pwd']);
    $confpwd = trim($_POST['confpwd']);
    $date_naissance = trim($_POST['date_naissance']);
    $adresse = trim($_POST['adresse']);
    $code_postal = trim($_POST['code_postal']);
    $ville = trim($_POST['ville']);
    $telephone = trim($_POST['telephone']);

    // Charger les données du fichier user.json
    $users = json_decode(file_get_contents("user.json"), true);

    // Ajouter les nouvelles données utilisateur
    $users[] = [
        'civilite' => $civilite,
        'login' => $login,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'pwd' =>$pwd,
        'date_naissance' => $date_naissance,
        'adresse' => $adresse,
        'code_postal' => $code_postal,
        'ville' => $ville,
        'telephone' => $telephone
    ];

    // Enregistrer les données mises à jour dans le fichier user.json
    file_put_contents("user.json", json_encode($users));

    // Rediriger vers la page de connexion ou de profil
    header("Location: connexion.php"); 
    exit;
}
?>

