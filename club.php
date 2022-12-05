<?php
class Club
{
    private $_clubName;
    private $_country;
    private $_mercatos;


    public function __Construct($clubName, country $country)
    {
        $this->_clubName = $clubName;
        $this->_country = $country;
        $this->_countryOrigin = [];
        $this->_country->addClubsToCountry($this);
        $this->_mercatos = [];
    }
    public function addPlayer($newPlayer)
    {
        $this->_mercatos[] = $newPlayer;
    }

    public function getPlayers()
    {
        $result =  "<u><large> The club " . $this . " is composed by the following players : </large></u><br>";
        foreach ($this->_mercatos as $players) {
            $result .= $players . "<br>"; // le ".=" AJOUTE a la variable "$result" les keys "club" du tableau "_clubs"
        }
        return $result . "<br>";
    }

    public function __toString()
    {
        return $this->_clubName;
    }
}
