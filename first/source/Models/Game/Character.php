<?php

namespace Source\Models\Game;

Class Character {
    protected $name;
    protected $life;
    protected $mana;
    protected $strength;

    public function __construct($name = null, $life = null, $mana = null, $strength = null) {
        $this->name = $name;
        $this->life = $life;
        $this->mana = $mana;
        $this->strength = $strength;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function getMana(): int {
        return $this->mana;
    }

    public function setMana(int $mana): void {
        $this->mana = $mana;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function setStrength($strength)
    {
        $this->strength = $strength;
    }
}