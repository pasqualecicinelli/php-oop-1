<?php

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
        array $generi,
        string $actors,
    ) {
        $this->title = $title;
        $this->generi = $generi;
        $this->actors = $actors;

    }

}



?>