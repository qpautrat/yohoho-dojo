<?php

namespace Yohoho;

use Yohoho\Vessel;

class Quote
{
    private $duration;

    private $passengers;

    private $vessel;

    private function __construct($duration, Passengers $passengers, Vessel $vessel)
    {
        $this->duration = $duration;
        $this->passengers = $passengers;
        $this->vessel = $vessel;
    }

    public static function fromQuoteRequest(QuoteRequest $quoteRequest, PassengerFactory $factory)
    {
        if ($quoteRequest->vessel() === Vessel::CARAQUE_NAME) {
            $vessel = Vessel::createCaraque();
        }

        return new self(
            $quoteRequest->duration(),
            self::getPassengersFromAges($quoteRequest->ages(), $factory),
            $vessel
        );
    }

    public function price()
    {
        return Ducat::fromValue($this->vessel->cost()->value() * $this->duration * $this->passengers->rate());
    }

    private static function getPassengersFromAges(array $ages, PassengerFactory $factory)
    {
        $passengerCollection = [];

        foreach ($ages as $age) {
            $passengerCollection[] = $factory->build($age);
        }

        return Passengers::fromPassengers($passengerCollection);
    }
}
