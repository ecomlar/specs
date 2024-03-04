<?php

namespace Ecomlar\ProductsSpec\DataTransferObjects;

use Spatie\LaravelData\Data;

final class ProductData extends Data
{
    public function __construct(
        public string $name,
        public int $categoryId,
        public ?string $description = null,
        public int $id = -1
    ) {
    }
}