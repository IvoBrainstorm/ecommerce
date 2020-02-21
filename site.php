<?php

use \Compra\Page;
use \Compra\Model\Product;

$app->config('debug', true);

$app->get('/', function() {

	$products = Product::listAll();
    
	$page = new Page();
	$page->setTpl("index", [
		"products" => Product::checkList($products)
	]);

});

?>