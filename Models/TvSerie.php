<?php

/**
 * Class TvSerie
 */

class TvSerie extends Production
{
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;




    public function __construct(

        string $title,

        Genre $generi,

        Actor $actors,

        int $aired_from_year,

        int $aired_to_year,

        int $number_of_episodes,

        int $number_of_seasons
    ) {
        parent::__construct($title, $generi, $actors);

        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
    public function getDetails()
    {
        return "$this->title, $this->generi, $this->actors, 
        $this->aired_from_year, $this->aired_to_year, 
        $this->number_of_episodes, $this->number_of_seasons";
    }
}


?>