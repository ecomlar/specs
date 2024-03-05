<?php

namespace Ecomlar\CategoriesSpec\Contracts;

use Ecomlar\CategoriesSpec\DataTransferObjects\CategoryData;
use Ecomlar\CategoriesSpec\ValueObjects\CategoryId;

interface GetCategoryByIdInterface
{
    public function execute(CategoryId $categoryId): ?CategoryData;
}