<?php

class Role {
    private string $_role;
    private array $_casting;

    public function __construct($role){
        $this->_role = $role;
        $this->_casting =[];
    }
    /*L'attribut casting[] va contenir l'ensemble de ceux-ci qui ont joué les rôles.*/

    public function __toString(){
        return $this->get_role();
    }
    /*La méthode get va délivrer le rôle, et retourner son rôle.*/

    public function get_role(){
        return $this->_role;
    }

    public function set_role($role){
        $this->_role = $role;
        return $this;
    }

    public function get_acteur(){
        return $this->_acteur;
    }

    public function set_acteur($acteur){
        $this->_acteur = $acteur;
        return $this;
    }

    public function ajouterCasting($casting){
        array_push($this->_casting,$casting);
        return $this;
    }
    public function afficherRole(){
        foreach ($this->_casting as $cast) {
            echo " ".$cast->getActeur()."</br>";
        }
    }
}
?>