<?php

namespace Yohoho;

class Vessel
{
    const CARAQUE_NAME = 'caraque';

    private $name;

    private $cost;

    private function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = Ducat::fromValue($cost);
    }

    public static function createCaraque()
    {
        return new self(self::CARAQUE_NAME, 1.1);
    }

    public function name()
    {
        return $this->name;
    }

    public function cost()
    {
        return $this->cost;
    }
}
