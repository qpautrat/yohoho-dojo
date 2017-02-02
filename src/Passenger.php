<?php

namespace Yohoho;

class Passenger
{
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function isChild()
    {
        return $this->age >= 0 && $this->age < 16;
    }

    public function isYoung()
    {
        return $this->age >= 16 && $this->age < 26;
    }

    public function isAdult()
    {
        return $this->age >= 26 && $this->age < 60;
    }

    public function isOld()
    {
        return $this->age >= 60;
    }
}
