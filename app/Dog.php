<?php

namespace App;

class Dog{

    protected static $bioType = 'Animal';

    public $name;

    public $weight;

    public $legsCount;

    private $isAlive = true;

    public function __construct($name, $weight, $legsCount = 4)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->legsCount = $legsCount;
    }

    public function run(){
        return $this->legsCount / $this->weight;
    }

    public static function getBioType(){
        return static::$bioType;
    }
}
