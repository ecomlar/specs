<?php

namespace Ecomlar\CategoriesSpec\Contracts;

use Ecomlar\CategoriesSpec\DataTransferObjects\CategoryData;

interface CreateCategoryInterface
{
    public function execute(CategoryData $productData): CategoryData;
}