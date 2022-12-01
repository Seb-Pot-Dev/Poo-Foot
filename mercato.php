<?php

Class Mercato
{
    private $_club;
    private $_player;

    public function __construct(Club $club, Player $player)
    {
        $this->_club=$club;
        $this->_club->addPlayer($this);

        $this->_player=$player;
        $this->_player->addClub($this);
    }
    public function __toString()
    {
        return $this->_player;
    }
}