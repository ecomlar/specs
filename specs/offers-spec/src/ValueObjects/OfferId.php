<?php

namespace Ecomlar\OffersSpec\ValueObjects;

use Webmozart\Assert\Assert;

final class OfferId
{
    public function __construct(
        public int $value
    ) {
        Assert::greaterThan($this->value, 0);
    }
}