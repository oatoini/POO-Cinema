<?php

class Casting {
    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->_film = $film;
        $film->ajouterCasting($this);
        $this->_acteur= $acteur;
        $acteur->ajouterCasting($this);
        $this->_role= $role;
        $role->ajouterCasting($this);  
    }

    public function __toString(){
        return $this->_role.' joué par '.$this->_acteur;
    }

    public function getRole(){
        return $this->_role;
    }

    public function setRole($role){
        $this->_role=$role;
        return $this;
    }

    public function getActeur(){
        return $this->_acteur;
    }

    public function setActeur($acteur){
        $this->_acteur=$acteur;
        return $this;
    }

    public function getFilm(){
        return $this->_film;
    }

    public function setFilm($film){
        $this->_film=$film;
        return $this;
    }
}

?>