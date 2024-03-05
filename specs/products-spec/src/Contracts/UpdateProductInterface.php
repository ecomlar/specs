<?php

namespace Ecomlar\ProductsSpec\Contracts;

use Ecomlar\ProductsSpec\DataTransferObjects\ProductData;
use Ecomlar\ProductsSpec\ValueObjects\ProductId;

interface UpdateProductInterface
{
    public function execute(ProductId $productId, ProductData $productData): ?ProductData;
}