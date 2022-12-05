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
        $this->_birthdate= $birthdate;
        $this->_nationality=$nationality;
        $this->_clubs=[];
    }
    public function addClub($newclub)
    {
        $this->_clubs [] = $newclub;
    }
    public function getClub()
    {
        $result =  "The player ".$this." is part of the following clubs : <br>";
        foreach($this->_clubs as $club)
        {
            $result.= $club."<br>"; // le ".=" AJOUTE a la variable "$result" les keys "club" du tableau "_clubs"
        }
        return $result; //renvoie la var "$result" auquel a été ajouté les différents $club
    }
    public function getNationality()
    {
        return "The player ".$this." has the ".$this->_nationality." nationaly.";
    }
    public function getAge()
    {
        $now=new DateTime();
        $bd=new DateTime($this->_birthdate);
        $age= date_diff($now, $bd);
        return $age->y;
    }
    public function getInfo()
    {
        $info= $this." born on ".$this->_birthdate. " is a ".$this->_nationality." ".$this->_sexe." player of ".$this->getAge()." years old. Here's his actual and past contracts :<br>";
        foreach($this->_clubs as $club)
        {
            $info.= $club."<br>";
        }
        return $info;
    } //probleme vient de array du club !!!!
    public function __toString()
    {
        return $this->_lastname." ".$this->_firstname;
    }
}