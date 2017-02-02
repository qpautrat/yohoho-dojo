<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\Ducat;

class DucatSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(5);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Ducat::class);
    }

    function it_should_get_value()
    {
        $this->value()->shouldReturn(5);
    }

    function it_should_be_an_integer()
    {
        $this->beConstructedWith('test');
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }
}
