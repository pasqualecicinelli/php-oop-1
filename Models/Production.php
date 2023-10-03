<?php

/**
 * ### Class Production
 */

class Production
{
    public $title;
    public $generi;
    public $actors;

    public function __construct(

        string $title,
        Genre $generi,
        Actor $actors,
    ) {

        $this->setTitle($title);
        $this->generi = $generi;
        $this->actors = $actors;

    }

    /*
    Faccio un controllo nel caso '$title' sia vuoto return false,
    questo controllo verrà ereditato anche da Movie e TvSerie
    */
    public function setTitle($title)
    {
        if (empty($title))
            return false;
        $this->title = $title;
    }


    //Funzione che verrà ereditata "getDetails()"
    public function getDetails()
    {
        //Passo anche le funzioni

        return "$this->title,
         {$this->generi->getType()},
         {$this->actors->getFullName()}";
    }

}


?>