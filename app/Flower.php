<?php

namespace App;


class Flower implements FoodInterface
{
    public $health;

    public function __construct($health)
    {
        $this->health = $health;
    }
}