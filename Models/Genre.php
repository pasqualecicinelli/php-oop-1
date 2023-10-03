<?php

/**
 * ### Class Genre
 */
class Genre
{
    public $type;

    public function __construct(
        array $type,
    ) {
        $this->type = $type;

    }

    //Prendo l'array e lo trasformo in una stringa
    public function getType()
    {
        $newType = implode(', ', $this->type);

        return "$newType";
    }
}





?>