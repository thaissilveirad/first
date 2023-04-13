<?php

Class Client extends User {
    private $profession;
    private $value;

public function __construct ($name = null, $email = null, $password = null, $cpf = null, $birthDate = null, $address = null, $profession = null, $value = null)
{
    parent ::__construct($name, $email, $password, $cpf, $birthDate, $address);
    $this->profession = $profession;
    $this->value = $value;
}

public function getProfession()
{
    return $this->profession;
}

public function setProfession($profession)
{
    $this->profession = $profession;
}

public function getValue()
{
    return $this->value;
}

public function setValue($value)
{
    $this->value = $value;
}


}