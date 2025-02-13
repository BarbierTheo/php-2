<?php

$show = true;
$show == true ? $bloc = "flex" AND $invisible = "" : $bloc = "none" AND $invisible = "<p>Le bloc est caché</p>";


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
    <style>
        .container{
            display : flex;
            flex-direction: column;
            height: 50vh;
            justify-content: center;
            align-items: center;
            padding : 5rem;
        }

        #bloc {
            display: <?= $bloc ?>;
            justify-content: center;
            align-items: center;
            height : 15rem;
            width: 15rem;
            background-color: green;
        }
    </style>
</head>

<body>

    <div class="container">
        <div id="bloc">
            <p>Je suis le bloc visible</p>
        </div>
        <?= $invisible ?>
    </div>



</body>

</html>