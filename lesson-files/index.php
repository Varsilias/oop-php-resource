<?php

include_once 'abstracts/Visa.abstract.php';
include_once 'classes/BuyProduct.class.php';

$buyProduct = new BuyProduct;
echo $buyProduct->getPayment();