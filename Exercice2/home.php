<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bienvenue sur la page d'accueil du site</h1>
    <?php
        if (isset($_SESSION["pseudo"])) {
           echo "<p>Souhaites-tu te déconnecter ".$_SESSION['pseudo']." ?</p>"; 
        }
    ?>
    <a href="logout.php"><button>Déconnexion</button></a>
</body>
</html>