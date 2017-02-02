<?php

namespace spec\Yohoho;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Yohoho\Quote;
use Yohoho\QuoteRequest;
use Yohoho\PassengerFactory;
use Yohoho\Passenger;

class QuoteSpec extends ObjectBehavior
{
    function let(PassengerFactory $factory)
    {
        $quoteRequest = new QuoteRequest(1, [15], 'caraque');
        $this->beConstructedFromQuoteRequest($quoteRequest, $factory);
        $factory->build(Argument::type('int'))->shouldBeCalled()->willReturn(new Passenger(15));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Quote::class);
    }

    function it_should_get_price()
    {
        $this->price()->value()->shouldReturn(round(1.2 * 1.1, 2));
    }
}
