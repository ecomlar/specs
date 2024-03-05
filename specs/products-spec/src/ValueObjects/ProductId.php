<?php

namespace Ecomlar\ProductsSpec\ValueObjects;

use Webmozart\Assert\Assert;

final class ProductId
{
    public function __construct(
        public int $value
    ) {
        Assert::greaterThan($this->value, 0);
    }
}