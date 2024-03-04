<?php

namespace Ecomlar\ProductsSpec\Contracts;

use Ecomlar\ProductsSpec\DataTransferObjects\ProductData;
use Ecomlar\ProductsSpec\ValueObjects\ProductId;

interface GetProductByIdInterface
{
    public function execute(ProductId $productId): ?ProductData;
}