<?php
require __DIR__ . '/Movie/oggetti_movie.php';

class Movie {
    public $titolo;
    public $genere;
    public $lingua;
    public $durata;
    public $valutazione;
    public $regista;

    public function __construct($titolo, $genere, $lingua, $durata, $valutazione, $regista){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->lingua = $lingua;
        $this->durata = $durata;
        $this->valutazione = $valutazione;
        $this->regista = $regista;
    }
        
    public function getTitle(){
        return $this->titolo; 
    }

    public function getGenere(){
        return $this->genere;
    }

    public function getDurata(){
        return $this ->durata;
    }
    public function getValutazione(){
        return $this ->valutazione;
    }
    public function getRegista(){
        return $this ->regista;
    }

    
}

    foreach($movies as $movie) {
        $film = new Movie($movie['titolo'],$movie['genere'],$movie['lingua'],$movie['durata'],$movie['valutazione'],$movie['regista']);

        echo "<h3>Titolo Film: ". $film->titolo ."</h3>";
        echo "<p>Genere: ". $film->genere ."</p>";
        echo "<p>Lingua originale: ". $film->lingua ."</p>";
        echo "<p>Durata: ". $film->durata ." min</p>";
        echo "<p>Voto: ". $film->valutazione ."/5</p>";
        echo "<p>Regia: ". $film->regista ."</p>";
    }
