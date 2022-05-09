<?php

class Genre
{
    private string $_genre;
    private array $_film;

    public function __construct(string $genre){
        $this->_genre = $genre;
        $this->_film = [];
    }

    public function ajouterGenre(Film $_genre) {
        $this ->_genre = $_genre;
    }

    public function ajouterFilm($film){
        array_push($this->_film,$film);
        return $this;
    }

    public function afficherFilm(){
        foreach ($this->_film as $movie) {
            echo $movie."</br>";
        }
    }

    public function __toString() {
        return $this->get_genre();
    }

    /**
     * Get the value of _genre
     */ 
    public function get_genre()
    {
        return $this->_genre;
    }

    /**
     * Set the value of _genre
     *
     * @return  self
     */ 
    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    /**
     * Get the value of _film
     */ 
    public function get_film()
    {
        return $this->_film;
    }

    /**
     * Set the value of _film
     *
     * @return  self
     */ 
    public function set_film($_film)
    {
        $this->_films = $_film;

        return $this;
    }
}

?>