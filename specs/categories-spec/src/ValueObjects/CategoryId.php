<?php

namespace Ecomlar\CategoriesSpec\ValueObjects;

use Webmozart\Assert\Assert;

final class CategoryId
{
    public function __construct(
        public int $value
    ) {
        Assert::greaterThan($this->value, 0);
    }
}