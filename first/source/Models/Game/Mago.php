<?php

Class Mago extends Character {
    private $inteligence;

    public function __construct($name = null, $life = null, $mana = null, $strength = null,, int $inteligence = null) {
        parent::__construct($name, $life, $mana, $strength);
        $this->inteligence = $inteligence;
    }

    public function getInteligence()
    {
        return $this->inteligence;
    }

    public function setInteligence($inteligence)
    {
        $this->inteligence = $inteligence;
    }
}