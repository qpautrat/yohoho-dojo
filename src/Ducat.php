<?php

namespace Yohoho;

use Assert\Assertion as Assert;

class Ducat
{
    /**
     * @var float
     */
    private $value;

    /**
     * @param float $value
     */
    private function __construct($value)
    {
        Assert::float($value);

        $this->value = round($value, 2);
    }

    public static function fromValue($value)
    {
        return new self($value);
    }

    /**
     * Get value.
     *
     * @return float
     */
    public function value()
    {
        return $this->value;
    }
}
