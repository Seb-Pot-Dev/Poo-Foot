<?php

class Mercato
{
    private $_club;
    private $_player;
    private $_contract_start;
    private $_contract_end;

    public function __construct(Club $club, Player $player, $contract_start, $contract_end)
    {
        $this->_club = $club;
        $this->_club->addPlayer($this);

        $this->_player = $player;
        $this->_player->addClub($this);

        $this->_contract_start = $contract_start;
        $this->_contract_end = $contract_end;
    }
    public function __toString()
    {
        return "<b>" . $this->_player . "</b> started a contract with " . $this->_club . " on <b>" . $this->_contract_start . "</b> that will end by <b>" . $this->_contract_end . "</b>";
    }
}
