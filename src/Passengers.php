<?php

namespace Yohoho;

class Passengers
{
    /**
     * @var Passenger[]
     */
    private $passengers;

    private function __construct(array $passengers)
    {
        $this->passengers = $passengers;
    }

    public static function fromPassengers(array $passengers)
    {
        return new self($passengers);
    }

    public function rate()
    {
        return array_reduce($this->passengers, function ($carry, Passenger $passenger) {
            return $carry + $this->getPassengerRate($passenger);
        }, 0);
    }

    private function getPassengerRate(Passenger $passenger)
    {
        switch (true) {
            case $passenger->isChild():
                return 1.2;
                break;
            case $passenger->isYoung():
                return 0.9;
                break;
            case $passenger->isAdult():
                return 1.0;
                break;
            case $passenger->isOld():
                return 1.2;
                break;
        }
    }
}
