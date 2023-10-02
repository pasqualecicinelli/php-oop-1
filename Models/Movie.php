<?php

require_once __DIR__ . '/Actors.php';
require_once __DIR__ . '/Genre.php';

/**
 * ### Class Movie
 */

class Movie
{

    public $title;
    public $generi;
    public $actors;

    public function __construct(

        string $title,
        Genre $generi,
        Actors $actors,
    ) {
        $this->title = $title;
        $this->Genre = $generi;
        $this->Actors = $actors;

    }

}



?>