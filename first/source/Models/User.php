<?php 

namespace Source\Models;

use Source\Core\Connect;
use Source\Models\Financial\Savings;

class User
{
    private $name;
    private $email;
    private $password;
    private $cpf;
    private $birthDate;
    private $address;
    private $savings; //n entra na construtora


public function __construct ($name = null, $email = null, $password = null, $cpf = null, $birthDate = null, $address = null)
{
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->cpf = $cpf;
    $this->birthDate = $birthDate;
    $this->address = $address;
}

public function getName()
{
    return $this->name;
}

public function setName($name)
{
    $this->name = $name;
}

public function getEmail()
{
    return $this->email;
}

public function setEmail($email)
{
    $this->email = $email;
}

public function getPassword($password)
{
    $this->$password = $password;
}

public function setPassword($password)
{
    $this->$password = $password;
}


public function getCpf($cpf)
{
     return $this->cpf; 
}

public setCpf($cpf)
{
    $this->cpf = $cpf;
}

public function getBirthDate($birthDate)
{
    return $this->$birthDate;
}

public function setBirthDate($birthDate)
{
    $this->birthDate = $birthDate;
}

public function getAddress($address)
{
    return $this->$address;
}

public function setAddress($address)
{
    $this->$address = $address;
}

public function addSavings (Savings $savings){
    $this->savings[] = $savings;
    var_dump( $this->savings);
}

}