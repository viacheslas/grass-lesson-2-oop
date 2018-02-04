<?php

require_once 'vendor/autoload.php';

use App\Dog;

$dog = new Dog('Tuzik', 5);

$dog2 = new Dog('Sharik', 5, 3);


echo  'First dog speed: '.$dog->run();

echo  '<br>';

echo  'Second dog speed: '.$dog2->run();
