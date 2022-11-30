<?php
Class Nationality
{
    private $_nationalityName;
    private $_allplayers;

    public function __Construct($name)
    {
        $this->_nationalityName=$name;
        $this->_allplayers=[];
    }
}