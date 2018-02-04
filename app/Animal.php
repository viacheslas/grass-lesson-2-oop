<?php

namespace App;


abstract class Animal implements FoodInterface
{
    use HealthTrait;
    // . . .

    public $weight;

    public $health;

    public function __construct($health, $weight)
    {
        $this->health = $health;
        $this->weight = $weight;
    }

    public abstract function eat(FoodInterface $food);
}
