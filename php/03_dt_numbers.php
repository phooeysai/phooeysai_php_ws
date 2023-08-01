<html><body><?php 

// your code here...
$counter = 0;
$status = false;
$price = 10.5;

var_dump(is_int($counter));
echo "<br/>";

var_dump(is_int($status));
echo "<br/>";

var_dump(is_int($price));
echo "<br/>";

echo "<br/>";

echo var_dump(is_integer($counter));
echo "<br/>";

print var_dump(is_integer($status));
echo "<br/>";

print var_dump(is_integer($price));
echo "<br/>";

// is_int, is_integer, is_long, is_float, is_double
echo PHP_INT_MAX;
echo "<br/>";
echo PHP_INT_MIN;
echo "<br/>";
echo PHP_FLOAT_MIN;
echo "<br/>";
echo PHP_FLOAT_MAX;
echo "<br/>";
echo PHP_INT_SIZE;
echo "<br/>";

// is_numeric
// https://www.php.net/manual/en/function.is-numeric.php

$price = 700;
$discount = 70.70;

$bill = $price - $discount;

echo (int)$bill;


?></body></html>