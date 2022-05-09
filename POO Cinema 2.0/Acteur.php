<?php

Class Acteur extends Artiste
{
    private array $_casting;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom, $prenom, $sexe, $birth);
        $this->_casting = [];
    }

    public function __toString(){
        return $this->get_nom()." ".$this->get_prenom()." ".$this->get_Age();
    }

    public function get_Filmographie(){
        return $this->_filmographie;
    }

    public function set_Filmographie($filmographie){
        $this->_filmographie=$filmographie;
        return $this;
    }

    public function ajouterFilmographie($filmographie){
        array_push($this->_filmographie,$filmographie);
        return $this;
    }

    public function afficherFilmographie(){
        foreach ($this->_casting as $cast) {
            echo " ".$cast->getFilm()." ".$cast->getRole()."</br>";
        }

    }

    public function ajouterCasting($casting){
        array_push($this->_casting,$casting);
        return $this;
    }


}

?>