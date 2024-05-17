<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <?php
    // Tableau des comptes utilisateurs fictifs
    $comptesUtilisateurs = array(
        "user01" => password_hash("mdp01", PASSWORD_DEFAULT),
        "toto" => password_hash("tata", PASSWORD_DEFAULT),
        "cricri" => password_hash("motdepasse", PASSWORD_DEFAULT),
        "user02" => password_hash("mdp02", PASSWORD_DEFAULT),
        "admin" => password_hash("nimda", PASSWORD_DEFAULT)
    );
    ?>
</body>
</html>