<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Address;
use Source\Models\Financial\Company;
use Source\Models\Financial\Savings;

$address = new Address("Rua tal", "1234", "Casa");
var_dump($address);

$user = new User("Thais", "thais@gmail.com", "25623738", $address);
var_dump($user);

$savings = new Savings("1524125", "3.000", "07/01");
var_dump($savings);

$user->addSavings($savings);
 