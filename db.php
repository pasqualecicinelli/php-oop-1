<?php

require_once __DIR__ . '/Models/Movie.php';

$the_actor_1 = new Actors(
    'Robert',
    'Pattinson'
);

$movie_1 = new Movie(
    'Batman',
    ['Action, Superheros'],

    $the_actor_1

);

$the_actor_2 = new Actors(
    'Tobey',
    'Maguire'
);

$movie_2 = new Movie(
    'Spider-Man',
    ['Fantastic, Adventure'],

    $the_actor_2

);

$movies = [
    $movie_1,
    $movie_2
];

var_dump($movies);


?>