<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php
        if (!isset($_SESSION['pseudo'])) {
            include "formulaire.php";
        } else {
            header("Location: home.php");
        }
    ?>
</body>
</html>