<?php
ini_set('display_errors', 1); //Om foutberichten altijd te tonen (handig op Ma cloud)
require 'autoload.php';

//require 'classes/src/Pascal/BAP/ProductCatalogue.php';
//require 'classes/src/Pascal/BAP/Product.php';
//require 'classes/src/Pascal/BAP/ShoppingCart.php';
//require 'classes/src/Nike/Commerce/Webshop/Product.php';

use Pascal\BAP\Product;
use Nike\Commerce\Webshop\Product as NikeProduct;

$product = new Product('Broorje Gezond');
$nike_product = new NikeProduct('Air Max',159.95);

//$cart = new ShoppingCart();
//$catalogue = new ProductCatalogue();

echo $product->getName();
echo $nike_product->getName();

// Deze bestanden doen verder niet veel bijzonders. Het is alleen om te oefenen met namespaces en autoloading
