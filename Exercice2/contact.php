<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body class="vh-100" style="background-color: lightblue;">
    <?php
        $user = strip_tags($_POST["pseudo"]);
        $mdp = strip_tags($_POST["mdp"]);
        require "users.php";

        if ((isset($comptesUtilisateurs[$user])) && (password_verify($mdp, $comptesUtilisateurs[$user]))) {
            $_SESSION["pseudo"] = $user;
            $_SESSION["mdp"] = $mdp;
            header("Location: home.php");
            exit;  
        } else {
            echo "<p class='fw-normal mb-3 pb-3' style='letter-spacing: 1px;'>Erreur lors de l'authentification</p>
                <script>setTimeout(function(){ window.location.href = 'index.php';}, 5000);</script>";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>