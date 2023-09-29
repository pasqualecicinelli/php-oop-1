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

    <div class="container mt-5 d-flex flex-nowrap justify-content-center">
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li class="card w-40 mt-3 p-2">
                    <h4>Titolo:
                        <?= $movie->title ?>
                    </h4>

                    <span>Genere:
                        <?= $movie->generi->getType(); ?>
                    </span>

                    <span>Attore:
                        <?= $movie->actors->getFullName(); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>



</body>

</html>