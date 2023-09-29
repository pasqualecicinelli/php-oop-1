<?php

require_once __DIR__ . '/Models/Movie.php';

$the_actor_1 = new Actors(
    'Robert',
    'Pattinson'
);

$genere_1 = new Genre(
    'Action',
);
$genere_2 = new Genre(
    'Fantastic',

);

$movie_1 = new Movie(
    'Batman',
    $genere_1,

    $the_actor_1

);

$the_actor_2 = new Actors(
    'Tobey',
    'Maguire'
);

$movie_2 = new Movie(
    'Spider-Man',
    $genere_2,
    $the_actor_2

);

$movies = [
    $movie_1,
    $movie_2
];


?>