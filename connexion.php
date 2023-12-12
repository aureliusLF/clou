<?php
session_start();
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
<body>
<h1 class="titreformu">Connexion</h1>
        <form action="login.php" method="POST">
            <fieldset>
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" required>
                <br>
                
                <label for="pwd">Mot de passe :</label>
                <input type="pwd" id="pwd" name="pwd" required>
                <br>
                
                <button type="submit">Se connecter</button>
                <p>Vous n'avez pas de compte ? <a href="formulaire.php" class="inscvous">Inscrivez-vous</a></p>

            </fieldset>
        </form>
</main>  
<?php
$_SESSION['user']=json_decode(file_get_contents("user.json"), true);


$_SESSION['user'][]=[ "login" => $_POST['login'], "pwd" => $_POST['pwd'] ];
file_put_contents("user.json", json_encode($_SESSION['user']));   


include_once "footer.php";
?>