<?php

class Artiste {

    protected string $_nom ;
    protected string $_prenom ;
    protected string $_sexe ;
    private DateTime $_birth;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_birth = new DateTime($birth);
    }

    public function __toString(){
        return  $this->get_nom().' '.$this->get_prenom().' '.$this->get_sexe().' '. $this->getAge();
    }

    public function get_nom(){
        return $this->_nom;
    }
   
    public function set_nom($nom){
        $this->_nom = $nom;
        return $this;
    }

    public function get_prenom(){
        return $this->_prenom;
    }

    public function set_prenom($prenom){
        $this->_prenom = $prenom;
        return $this;
    }

    public function get_sexe(){
        return $this->_sexe;
    }

    public function set_sexe($sexe){
        $this->_sexe = $sexe;
        return $this;
    }

    public function get_birth(){
        return $this->_birth;
    }

    public function set_birth($_birth){
        $this->_birth = $_birth->format('Y-m-d');
        return $this;
    }

    public function get_Age()
    {
        $dateJour = new DateTime();
        $date = $this->get_birth();
        $age = $dateJour->diff($date)->format('%y ans ');
        return $age;
    }

}

?>