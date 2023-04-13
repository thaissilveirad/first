<?php 

Class Burglar extends Character {
    private $agility;

    public function __construct($name = null, $life = null, $mana = null, $strength = null, $agility = null) {
        parent::__construct($name, $life, $mana, $strength);
        $this->agility = $agility;
    }

    public function getAgility()
    {
        return $this->agility;
    }

    public function setAgility($agility)
    {
        $this->agility = $agility;
    }
}