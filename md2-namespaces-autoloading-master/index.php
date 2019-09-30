<?php
ini_set('display_errors', 1); //Om foutberichten altijd te tonen (handig op Ma cloud)
require 'autoload.php';

use Pascal\BAP\Product;
use Pascal\BAP\ShoppingCart;
use Pascal\BAP\ProductCatalogue;
use Nike\Commerce\Webshop\Product as NikeProduct;

$product = new Product('Broorje Gezond');
$nike_product = new NikeProduct('Air Max',159.95);

$cart = new ShoppingCart('Chicken');
$catalogue = new ProductCatalogue('Speal');

echo $product->getName();
echo $nike_product->getName();
echo $cart->getInhoud();
echo $catalogue->getCatalogue();

// Deze bestanden doen verder niet veel bijzonders. Het is alleen om te oefenen met namespaces en autoloading
