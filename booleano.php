<?php
$stock = 50; // Integer
$cantidad = "50"; // String
if($stock === $cantidad){
	echo "Hay stock, con cantidad string";
}
$stock = 50; // Integer
$cantidad = 50.00; // decimal
if($stock === $cantidad){
	echo "Hay stock, con cantidad decimal";
}
$stock = 50; // Integer
$cantidad = 50;
if($stock === $cantidad){
	echo "Hay stock";
}