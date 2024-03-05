<?php

namespace Ecomlar\CategoriesSpec\DataTransferObjects;

use Spatie\LaravelData\Data;

final class CategoryData extends Data
{
    public function __construct(
        public string $name,
        public int $id = -1
    ) {
    }
}