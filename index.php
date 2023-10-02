<?php

require __DIR__ . '/db.php';


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
        <ul class="list-group p-2">

            <li class="list-group-item">
                <h3>Film</h3>

            </li>

            <?php foreach ($prod_movies as $movie): ?>

            <li class="list-group-item">

                <?= $movie->getDetails(); ?>

            </li>
            <?php endforeach; ?>
        </ul>

        <ul class="list-group p-2">

            <li class="list-group-item">
                <h3>Serie Tv</h3>
            </li>

            <?php foreach ($prod_Tv_Series as $serieTv): ?>

            <li class="list-group-item">

                <?= $serieTv->getDetails(); ?>

            </li>
            <?php endforeach; ?>
        </ul>
    </div>



</body>

</html>