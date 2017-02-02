<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\Passengers;
use Yohoho\Passenger;

class PassengersSpec extends ObjectBehavior
{
    function let()
    {
        $passengers = [
            new Passenger(15),
            new Passenger(25),
            new Passenger(59),
            new Passenger(60)
        ];

        $this->beConstructedFromPassengers($passengers);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Passengers::class);
    }

    function it_should_calculate_rate()
    {
        $this->rate()->shouldReturn(1.2 + 0.9 + 1 + 1.2);
    }
}
