<?php

namespace App;


class Lion extends Animal
{
    public function eat(FoodInterface $food){
        $this->health = $this->getHealth() + $food->getHealth()/2;
    }
}