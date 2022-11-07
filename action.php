<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;
use App\classes\Brand;

$category = new Category();
$categories = $category->getAllCategory();

$brand = new Brand();
$brands = $brand->getAllBrand();

$product =new Product();
$products=$product->getAllProducts();


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'category-product')
    {

        $products = $product->getProductsByCategory($_GET['category_id']);
        include 'pages/category-product.php';
    }
    elseif ($_GET['page'] == 'brand')
    {

        $products = $product-> getProductByBrand($_GET['brand_id']);
        include 'pages/brand.php';
    }
    elseif ($_GET['page'] == 'product-detail')
    {

        $singelProduct = $product -> getProductId($_GET['id']);
        include 'pages/product-detail.php';
    }
}