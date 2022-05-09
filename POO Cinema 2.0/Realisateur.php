<?php

class Realisateur extends Artiste{

    private array $_realisation;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom, $prenom, $sexe, $birth);
        $this->_realisation = [];
    }

    public function __toString(){
        return $this->get_nom().' '.$this->get_prenom().' '. $this->getAge();
    }

    public function get_realisation()
    {
        return $this->_realisation;
    }

    public function set_realisation($realisation)
    {
        $this->_realisation = $realisation;
        return $this;
    }
    public function ajouterRealisation($realisation){
        array_push($this->_realisation,$realisation);

        return $this;
    }

    public function afficherRealisation(){
        foreach ($this->_realisation as $real) {
            echo " ".$real."</br>";
        }
    }
}
?>