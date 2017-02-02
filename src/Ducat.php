<?php

namespace Yohoho;

use Assert\Assertion as Assert;

class Ducat
{
    /**
     * @var int
     */
    private $value;

    /**
     * @param int $value
     */
    public function __construct($value)
    {
        Assert::integer($value);

        $this->value = $value;
    }

    /**
     * Get value.
     *
     * @return int
     */
    public function value()
    {
        return $this->value;
    }
}
