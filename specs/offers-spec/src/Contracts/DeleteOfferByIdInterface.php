<?php

namespace Ecomlar\OffersSpec\Contracts;

use Ecomlar\OffersSpec\ValueObjects\OfferId;

interface DeleteOfferByIdInterface
{
    public function execute(OfferId $offerId): ?bool;
}