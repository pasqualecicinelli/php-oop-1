<?php


/**
 * ### Class Actor
 */

class Actor
{

    public $name;
    public $surname;

    public function __construct(
        string $name,
        string $surname,
    ) {
        $this->name = $name;
        $this->surname = $surname;
    }

    //Unisco le due stringhe
    public function getFullName()
    {

        return "$this->name $this->surname";

    }
}

?>