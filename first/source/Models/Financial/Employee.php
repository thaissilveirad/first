<?php

Class Employee extends User {
    private $office;
    private $department;
    private $register;


public function __construct ($name = null, $email = null, $password = null, $cpf = null, $birthDate = null, $address = null, $office = null, $department = null, $register = null)  )
{
    parent ::__construct($name, $email, $password);
    $this->office = $office;
    $this->department = $department;
    $this->register = $register;
}


public function getOffice($office)
{
     return $this->office; 
}

public setOffice($office)
{
    $this->office = $office;
}

public function getDepartment($department)
{
    return $this->$department;
}

public function setDepartment($department)
{
    $this->department = $department;
}

public function getRegister($register)
{
    return $this->$register;
}

public function setRegister($register)
{
    $this->$register = $register;
}

}