<?php
Class Player
{
    private $_lastname;
    private $_firstname;
    private $_sexe;
    private $_birthdate;
    private $_nationality;
    private $_clubs;

    public function __Construct ($lastname, $firstname, $sexe, $birthdate, nationality $nationality)
    {
        $this->_lastname=$lastname;
        $this->_firstname=$firstname;
        $this->_sexe=$sexe;
        $this->_birthdate=new DateTime ($birthdate);
        $this->_nationality=$nationality;
        $this->_clubs=[];
    }
    public function addClub($newclub)
    {
        $this->_clubs [] = $newclub;
    }
    public function getClub()
    {
        echo "Le joueur ".$this." fait partie du/des clubs suivants : ";
        foreach($this->_clubs as $club)
        {
            return $club."<br>";
        }
    }
    public function __toString()
    {
        return $this->_lastname." ".$this->_firstname;
    }
}