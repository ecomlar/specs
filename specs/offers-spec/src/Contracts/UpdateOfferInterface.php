<?php

namespace Ecomlar\OffersSpec\Contracts;

use Ecomlar\OffersSpec\DataTransferObjects\OfferData;
use Ecomlar\OffersSpec\ValueObjects\OfferId;

interface UpdateOfferInterface
{
    public function execute(OfferId $offerId, OfferData $productData): ?OfferData;
}