<?php

$dark_mode = true;
// true = light, false = dark

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
    <style>
        .dark {
            color: white;
            background-color: black;
            border: 1px solid black;
        }

        .light {
            color: black;
            background-color: light-grey;
            border: 1px solid black;
        }
        p {
            text-align: center;
        }
    </style>
</head>

<body>

    <input type="checkbox" id="dark_mode" name="dark_mode" <?= $dark_mode == true ? "checked" : "" ?>>
    <label for="dark_mode">dark mode</label>
    <div id="myElement" class="<?= $dark_mode == true ? "dark" : "light" ?>">
        <p>Hello World</p>
    </div>

</body>

</html>