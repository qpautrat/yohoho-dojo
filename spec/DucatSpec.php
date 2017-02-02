<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\Ducat;

class DucatSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedFromValue(5.0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Ducat::class);
    }

    function it_should_get_value()
    {
        $this->value()->shouldReturn(5.0);
    }

    function it_should_be_a_float()
    {
        $this->beConstructedFromValue(1);
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }
}
