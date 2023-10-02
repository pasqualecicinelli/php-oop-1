<?php

/**
 * ### Class Genre
 */
class Genre
{
    public $type;

    public function __construct(
        string $type,
    ) {
        $this->type = $type;

    }
    public function getType()
    {
        return "$this->type";
    }
}





?>