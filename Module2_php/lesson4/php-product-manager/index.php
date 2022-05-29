<?php
require_once 'Models/product.php';
require_once 'services/productManager.php';

use services\ProductManager;
use Models\product;

$productManager= new ProductManager();
$productManager->add(new Product('laptop'));
$productManager->add(new Product('Mobile'));
$productManager->add(new Product('table'));


$products = $productManager-> getProducts();
foreach ($products as $product){
    echo $product->getName(). "<br/>";
}