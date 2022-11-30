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
}