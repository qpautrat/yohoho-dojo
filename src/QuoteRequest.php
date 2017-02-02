<?php

namespace Yohoho;

class QuoteRequest
{
    /**
     * @var float
     */
    private $duration;

    private $ages;

    /**
     * @var string
     */
    private $vesselType;

    /**
     * @param float $duration
     * @param string $vesselName
     */
    public function __construct($duration, $ages, $vesselType)
    {
        $this->duration = $duration;
        $this->ages = $ages;
        $this->vesselType = $vesselType;
    }

    /**
     * @return string
     */
    public function vessel()
    {
        return $this->vesselType;
    }

    /**
     * Gte duration.
     *
     * @return float
     */
    public function duration()
    {
        return $this->duration;
    }

    public function ages()
    {
        return $this->ages;
    }
}
