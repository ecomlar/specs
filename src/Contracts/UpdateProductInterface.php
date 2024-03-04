<?php

namespace Ecomlar\ProductsSpec\Contracts;

use Ecomlar\ProductsSpec\DataTransferObjects\ProductData;

interface UpdateProductInterface
{
    public function execute(ProductData $productData): ?ProductData;
}