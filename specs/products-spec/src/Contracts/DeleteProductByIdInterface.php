<?php

namespace Ecomlar\ProductsSpec\Contracts;

use Ecomlar\ProductsSpec\ValueObjects\ProductId;

interface DeleteProductByIdInterface
{
    public function execute(ProductId $productId): ?bool;
}