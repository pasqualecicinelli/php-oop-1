<?php

require __DIR__ . '/Models/Production.php';
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/TvSerie.php';
require __DIR__ . '/Models/Genre.php';
require __DIR__ . '/Models/Actor.php';





$the_actor_movie_1 = new Actor(
    'Robert',
    'Pattinson'
);

$the_actor_movie_2 = new Actor(
    'Tobey',
    'Maguire'
);

$genere_movie_1 = new Genre(
    'Action'
);
$genere_movie_2 = new Genre(
    'Fantastic'

);

$the_actor_STV_1 = new Actor(
    'Alvaro',
    'Morte'
);

$the_actor_STV_2 = new Actor(
    'Richard',
    'Madden'
);

$genere_STV_1 = new Genre(
    'Action'
);
$genere_STV_2 = new Genre(
    'Action'

);

$SerieTv_1 = new TvSerie(
    'La casa di carta',

    $genere_STV_1,

    $the_actor_STV_1,

    2008,

    2015,

    10,

    5

);
$SerieTv_2 = new TvSerie(

    'Citadel',

    $genere_STV_2,

    $the_actor_STV_2,

    2022,

    2023,

    6,

    1

);
$movie_1 = new Movie(
    'Batman',

    $genere_movie_1,

    $the_actor_movie_1,

    2008,

    300

);

$movie_2 = new Movie(
    'Spider-Man',

    $genere_movie_2,

    $the_actor_movie_2,

    2002,

    200

);

$prod_movie = [
    $movie_1,
    $movie_2
];

//echo "<h1>" . $movie_1->getDetails() . "</h1>";

var_dump($prod_movie);

$prod_Tv_Serie = [
    $SerieTv_1,
    $SerieTv_2
];

var_dump($prod_Tv_Serie);

?>