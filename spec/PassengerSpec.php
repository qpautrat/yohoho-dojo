<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\Passenger;

class PassengerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(15);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Passenger::class);
    }

    function it_should_reveal_it_is_a_child()
    {
        $this->beConstructedWith(15);
        $this->isChild()->shouldReturn(true);
    }

    function it_should_reveal_it_is_young()
    {
        $this->beConstructedWith(22);
        $this->isYoung()->shouldReturn(true);
    }

    function it_should_reveal_it_is_an_adult()
    {
        $this->beConstructedWith(45);
        $this->isAdult()->shouldReturn(true);
    }

    function it_should_reveal_it_is_old()
    {
        $this->beConstructedWith(87);
        $this->isOld()->shouldReturn(true);
    }
}
