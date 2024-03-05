<?php

namespace Ecomlar\CategoriesSpec\Contracts;

use Ecomlar\CategoriesSpec\ValueObjects\CategoryId;

interface DeleteCategoryByIdInterface
{
    public function execute(CategoryId $categoryId): ?bool;
}