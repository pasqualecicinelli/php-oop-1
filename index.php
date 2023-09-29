<?php

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object-oriented programming 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <ul class="card">
            <?php foreach ($movies as $movie): ?>
                <li>
                    <span>Titolo: </span>
                    <?= $movie->title ?>
                </li>

                <!--   <li> <span>Genere: </span>
                    <?php //foreach ($movie as $generi) ?>
                    <? //= $generi ?>
                </li>-->

                <li>
                    <span>Attore: </span>
                    <?= $movie->actors->getFullName(); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>



</body>

</html>