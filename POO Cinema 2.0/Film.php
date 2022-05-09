<?php

class Film {

    private string $_titre ;
    private int $_duree ;
    private int $_dateSortie ;
    private Realisateur $_realisateur ;
    private string $_synopsis ;
    private Genre $_genre;

/*Ma classe "Film" va contenir le titre, la durée, la date de sortie, le réalisateur (qui sera une sous-classe comme "acteurs" car ayant un nom,
prénom, sexe, date de naissance, tout comme celle-ci), le synopsis et le genre (qui sera une classe contenant : les genres et leurs listes de films). 
*/


    public function __construct ($_titre , $_duree , $_dateSortie , Realisateur $_realisateur , $_synopsis, Genre $genre){
        $this ->_titre = $_titre ;
        $this ->_duree = $_duree ;
        $this ->_dateSortie = $_dateSortie ;
        $this ->_realisateur = $_realisateur ;
        $_realisateur->ajouterRealisation($this);
        /*La méthode ajouterRealisation() est une méthode de la classe Realisateur{} qui va lister : le nom du réalisateur dans la classe 
        réalisateur {}*/
        $this ->_synopsis = $_synopsis ;
        $this ->_genre = $genre;
        $genre->ajouterGenre($this);
        $this->_casting=[];
    }

    
    
    public function __toString () {
        return $this -> _titre." (dont la durée est de ".$this -> _duree." min) sorti en ".$this -> _dateSortie." C'est un film de".$this ->_genre." : "
        .$this -> _synopsis.".";
    }


    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    /**
     * Get the value of _duree
     */ 
    public function get_duree(){
        if ($this->_duree > 60) {
            return strftime('%H heures %M minutes' ,mktime(0,$this->_duree));
        }else {
            return strftime('%M minutes' ,mktime(0,$this->_duree));
        }
    }

    /**
     * Set the value of _duree
     *
     * @return  self
     */ 
    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

    /**
     * Get the value of _dateSortie
     */ 
    public function get_dateSortie()
    {
        return $this->_dateSortie;
    }

    /**
     * Set the value of _dateSortie
     *
     * @return  self
     */ 
    public function set_dateSortie($_dateSortie)
    {
        $this->_dateSortie = $_dateSortie;

        return $this;
    }

    /**
     * Get the value of _realisateur
     */ 
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    /**
     * Set the value of _realisateur
     *
     * @return  self
     */ 
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }

    /**
     * Get the value of _synopsis
     */ 
    public function get_synopsis()
    {
        return $this->_synopsis;
    }

    /**
     * Set the value of _synopsis
     *
     * @return  self
     */ 
    public function set_synopsis($_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
    }

    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($genre)
    {
        $this->_genre = $genre;

        return $this;
    }


    public function ajouterCasting($casting){
        array_push($this->_casting,$casting);

        return $this;
    }
    

    public function afficherCasting(){
        foreach ($this->_casting as $cast) {
            echo " ".$cast."</br>";
        }
    }

}
?>