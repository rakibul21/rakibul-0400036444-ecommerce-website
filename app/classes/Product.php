<?php


namespace App\classes;
class Product
{
    public $products = [];
    public $categoryProducts = [];
    public $brandProducts = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'          => 1,
                'category_id' => 1,
                'brand_id'    => 1,
                'name'        => 'Sony Xperia XZ',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 55000,
                'image'       => 'product1.webp'
            ],
            1 => [
                'id'          => 2,
                'category_id' => 1,
                'brand_id'    => 2,
                'name'        => 'Samsung Galexy S22',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 105000,
                'image'       => 'product2.jpg'
            ],
            2 => [
                'id'          => 3,
                'category_id' => 2,
                'brand_id'    => 3,
                'name'        => 'Jeans Pant',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 1000,
                'image'       => 'product3.jpeg'
            ],
            3 => [
                'id'          => 4,
                'category_id' => 2,
                'brand_id'    => 4,
                'name'        => 'New T-Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 500,
                'image'       => 'product4.jpeg'
            ],
            4 => [
                'id'          => 5,
                'category_id' => 3,
                'brand_id'    => 5,
                'name'        => 'New Cricket Bat',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 3500,
                'image'       => 'product5.jpg'
            ],
            5 => [
                'id'          => 6,
                'category_id' => 3,
                'brand_id'    => 5,
                'name'        => 'Cricket Boll',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 400,
                'image'       => 'product6.webp'
            ],
            6 => [
                'id'          => 7,
                'category_id' => 4,
                'brand_id'    => 6,
                'name'        => 'Sharee',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 2400,
                'image'       => 'product7.jpeg'
            ],
            7 => [
                'id'          => 8,
                'category_id' => 4,
                'brand_id'    => 4,
                'name'        => 'Woman T-Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 900,
                'image'       => 'product8.webp'
            ],
            8 => [
                'id'          => 9,
                'category_id' => 5,
                'brand_id'    => 4,
                'name'        => 'Kids T-Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 900,
                'image'       => 'product9.jpg'
            ],
            9 => [
                'id'          => 10,
                'category_id' => 5,
                'brand_id'    => 3,
                'name'        => 'Kids Pant',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'price'       => 700,
                'image'       => 'product10.jpg'
            ],
        ];
    }

    public function getProductsByCategory ($categoryId)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->categoryProducts, $product);
            }
        }
        return $this->categoryProducts;
    }
    public function getProductByBrand ($brandId)
    {
        foreach ($this->products as $product)
        {
            if ($product['brand_id'] == $brandId)
            {
                array_push($this->brandProducts, $product);
            }
        }
        return $this->brandProducts;
    }
    public function getProductId($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }

    public function getAllProducts(){
        return $this->products;
    }




}