<?php
Class Country
{
    private $_countryname;
    private $_allteams;

    public function __Construct ($countryname)
    {
        $this->_countryname=$countryname;
        $this->_allteams=[];
    }
    public function addClubsToCountry($team)
    {
        $this->_allteams[] = $team; //ici
    }
    public function getInfo()
    {
        $result= $this->_countryname." does contain all these teams : <br>";
        foreach ($this->_allteams as $club)
        {
            $result.= $club."<br>";
        }
        return $result."<br>";
    }
    public function __toString()
    {
        return $this->_countryname;
    }
}