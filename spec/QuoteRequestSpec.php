<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\QuoteRequest;

class QuoteRequestSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(3, [27], 'test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(QuoteRequest::class);
    }

    function it_should_get_vessel_type()
    {
        $this->vessel()->shouldReturn('test');
    }

    function it_should_get_duration()
    {
        $this->duration()->shouldReturn(3);
    }

    function it_should_get_ages()
    {
        $this->ages()->shouldReturn([27]);
    }
}
