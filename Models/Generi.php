<?php

class Generi
{
    public $generi;


    function __construct($_generi)
    {
        $this->generi = $_generi;
    }

    public function seeGeneres()
    {
        echo "Genere: " . $this->generi . "<br>";
    }
}
