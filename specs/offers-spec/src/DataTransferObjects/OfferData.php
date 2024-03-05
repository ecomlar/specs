<?php

namespace Ecomlar\OffersSpec\DataTransferObjects;

use Spatie\LaravelData\Data;

final class OfferData extends Data
{
    public function __construct(
        public int $productId,
        public int $price = 0,
        public int $id = -1
    ) {
    }
}