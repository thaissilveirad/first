<?php

class Warrior extends Character {
    private $defense;

    public function __construct($name = null, $life = null, $mana = null, $strength = null, $defense = null) {
        parent::__construct($name, $life, $mana, $strength);
        $this->defense = $defense;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    public function setDefense($defense)
    {
        $this->defense = $defense;
    }
}