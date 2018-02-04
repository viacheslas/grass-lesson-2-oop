<?php

namespace App;


trait HealthTrait
{
    public function getHealth():int{
        return $this->health;
    }
}