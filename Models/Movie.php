<?php

class Movie
{
    public $titolo;
    public $durata;
    public $genere;
    public $etaMinima;

    function __construct($_titolo, $_durata, Generi $_genere, $_etaMinima)
    {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->genere = $_genere;
        $this->etaMinima = $_etaMinima;
    }

    public function seeMovie()
    {
        echo "Titolo: " . $this->titolo . "<br>";
    }
}
