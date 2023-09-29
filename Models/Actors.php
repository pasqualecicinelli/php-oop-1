<?php

class Actors
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


    public function getFullName()
    {

        return "$this->name $this->surname";

    }
}

?>