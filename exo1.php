<?php 

    $age = 15;

    if ($age >=18 ) {
        echo "Vous êtes majeur";
    } else {
        echo "Vous êtes mineur";
    }

    echo '<br><br>';

    $reponse = "";
    $age >= 18 ? $reponse = "Vous êtes majeur" : $reponse = "Vous êtes mineur";
    echo $reponse;

?>