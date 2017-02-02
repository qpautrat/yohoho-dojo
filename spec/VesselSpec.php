<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\Ducat;

class VesselSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Yohoho\Vessel');
    }

    function it_should_create_a_caraque()
    {
        $this->beConstructedCreateCaraque();
        $this->name()->shouldReturn('caraque');
        $this->cost()->value()->shouldReturn(1.1);
    }
}
