<?php

Class Club
{
    private $_clubName;
    private $_country;
    private $_compo;

    public function __Construct ($clubName, country $country)
    {
        $this->_clubName=$clubName;
        $this->_country=$country;
        $this->_compo=[];
        // $this->_mercato=[];
    }
    public function addClub($newPlayer)
    {
        $this->_compo[]=$newPlayer;
    }
    public function __toString()
    {
        return $this->_clubname;
    }
}