<?php

/**
 * ### Class Movie
 */

//Estendo la classe Production a Movie
class Movie extends Production
{
    //Valore statico che non cambia
    public static $minits = 'min';

    public $published_year;
    public $running_time;
    public function __construct(

        string $title,

        Genre $generi,

        Actor $actors,

        int $published_year,

        int $running_time,


    ) {
        //Passo le proprietà ereditate

        parent::__construct($title, $generi, $actors);

        $this->published_year = $published_year;

        $this->running_time = $running_time;
    }

    public function getDetails()
    {
        //Passo la proprietà statica

        $minuti = self::$minits;

        return "<strong>Titolo:</strong> $this->title <br> 
        <strong>Generi: </strong>{$this->generi->getType()}<br> 
        <strong>Attori: </strong> {$this->actors->getFullName()}<br>
        <strong>Anno di pubblicazione: </strong> $this->published_year <br>
        <strong>Durata di: </strong> $this->running_time $minuti";
    }

}



?>