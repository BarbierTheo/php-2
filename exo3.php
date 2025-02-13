<?php

    $age = 26;
    $gender = true;
    // Homme = true (1) / Femme = false (0)

    if ($age >= 18) {
        if ($gender == true) {
            echo "Vous êtes un homme majeur";
        } else {
            echo "Vous êtes une femme majeure";
        }
    } else {
        if ($gender == true) {
            echo "Vous êtes un homme mineur";
        } else {
            echo "Vous êtes une femme mineure";
        }
    }