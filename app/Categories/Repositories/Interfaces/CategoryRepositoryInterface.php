<?php

namespace App\Categories\Repositories\Interfaces;

use App\Base\Interfaces\BaseRepositoryInterface;
use App\Categories\Category;
use App\Products\Product;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function listCategories(string $order = 'id', string $sort = 'desc') : array;

    public function createCategory(array $params) : Category;

    public function updateCategory(array $params) : Category;

    public function findCategoryById(int $id) : Category;

    public function deleteCategory() : bool;

    public function associateProduct(Product $product);

    public function findProducts();

    public function syncProducts(array $params);

    public function detachProducts();

    public function deleteFile(array $file, $disk = null) : bool;

    public function findCategoryBySlug(array $slug) : Category;

    public function findProductsInCategory(int $id);
}