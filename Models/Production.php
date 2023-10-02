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
        $this->title = $title;
        $this->Genre = $generi;
        $this->Actor = $actors;

    }

    public function getDetails()
    {
        return "$this->title, {$this->generi->getType}, {$this->actors->getFullName}";
    }
}


?>