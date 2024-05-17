<h1>Partie 1</h1>
<?php
    # 1
    function test($entier) {
        if ($entier < 11) {
            echo "<p>La valeur de l'entier est : $entier</p>";
            return $entier++;
        } else {
            echo "<p>La valeur de l'entier est : $entier + 1</p>";
        }
    }
    
    echo "<p>Hello World</p>";
    $entier = 9;
    echo $entier;
    echo "<p>La valeur de l'entier est : $entier</p>";
    $entier = test($entier);
    $entier = test($entier);
    $entier = test($entier);
?>

<h1>Partie 2</h1>
<?php
    # 2
    $pas = 1;
    while ($pas <= 10) {
        echo "$pas ";
        $pas++;
    }
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i ";
    }
    echo "<br>";
    function boucle_for($p) {
        for ($i = 1; $i <= $p; $i++) {
            echo "$i ";
        }
    }
    boucle_for(8);
?>

<h1>Partie 3</h1>
<?php
    function ligne($nbr_etoile, $nbr_ligne) {
        for ($j = 1; $j <= $nbr_ligne; $j++) {
            for ($i = 1; $i <= $nbr_etoile; $i++) {
                echo "*";
            }
            echo "<br>";
        }
        
    }
    ligne(8, 1);
    echo "<br>";
    ligne(8, 8);
?>

<h1>Partie 4</h1>
<?php
    $tableau = [12,15,20,15,13,9,5,14];
    for ($i = 0; $i < count($tableau); $i++) {
        echo "$tableau[$i], ";
    }

    function info($tableau) {
        $moyenne = 0;
        $sup_10 = 0;
        $meilleur_note = 0;
        for ($i = 0; $i < count($tableau); $i++) {
            $moyenne += $tableau[$i];
            if ($tableau[$i] > $meilleur_note) {
                $meilleur_note = $tableau[$i];
            }
            if ($tableau[$i] > 10) {
                $sup_10++;
            }
            if ($tableau[$i] == 20) {
                echo "<p>La note 20 est dans le tableau</p>";
            }
        }
        $moyenne /= count($tableau);
        echo "<p>Moyenne = $moyenne.<br>
        Il y a $sup_10 notes supérieurs à 10 dans le tableau.<br>
        La meilleur note est $meilleur_note.</p>";
    }

    info($tableau);

?>