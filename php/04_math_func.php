<html><body><?php 

// your code here...

// max, min
$top_grade = max(77, 57, 89, 93, 46);
echo $top_grade;
echo "<br/>";

$low_grade = min(89, 76, 56, 47, 89);
echo $low_grade;
echo "<br/>";

// abs() --> abs(-45) = 45; abs(43) = 43;
// round() --> gives you a rounded value

$price = 89.49;
$price_point = round($price);
echo $price_point;
echo "<br/>";

// sqrt() ---> get sqrt of a number
// pi() ---> get value of pi

// rand() --> get a random number, rand(min, max);
$seed = rand(10000,99999);
echo $seed;



?></body></html>