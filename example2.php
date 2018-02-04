<?php

require_once 'vendor/autoload.php';

use App\Animal;
use App\Flower;
use App\Oak;

$oak = new Oak(100, 100);

$flower = new Flower(50);

$lion = new Oak(100, 150);

echo 'Oak health: '.$oak->getHealth();

$oak->eat($flower);

echo '<br>Oak health: '.$oak->getHealth();


$lion->eat($oak);


echo '<br>Lion health: '.$lion->getHealth();
