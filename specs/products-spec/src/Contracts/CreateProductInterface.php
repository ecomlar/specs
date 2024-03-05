<?php

namespace Ecomlar\ProductsSpec\Contracts;

use Ecomlar\ProductsSpec\DataTransferObjects\ProductData;

interface CreateProductInterface
{
    public function execute(ProductData $productData): ProductData;
}