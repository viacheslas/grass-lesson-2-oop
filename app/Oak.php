<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/02/2018
 * Time: 18:43
 */

namespace App;


class Oak extends Animal
{

    public function eat(FoodInterface $food){
        $this->health = $this->getHealth() + $food->getHealth();
    }

}