<?php

/**
 * ### Class Movie
 */

class Movie extends Production
{
    public $published_year;
    public $running_time;
    public function __construct(

        string $title,

        Genre $generi,

        Actor $actors,

        int $published_year,

        int $running_time,


    ) {
        parent::__construct($title, $generi, $actors);

        $this->published_year = $published_year;

        $this->running_time = $running_time;
    }

    public function getDetails()
    {
        return "$this->title, $this->generi, $this->actors, $this->published_year, $this->running_time";
    }

}



?>