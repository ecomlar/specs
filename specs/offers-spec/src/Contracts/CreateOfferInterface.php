<?php

namespace Ecomlar\OffersSpec\Contracts;

use Ecomlar\OffersSpec\DataTransferObjects\OfferData;

interface CreateOfferInterface
{
    public function execute(OfferData $offerData): OfferData;
}