<html><body><?php 

// your code here...
// String, ', ", 
echo "<h1>PHP Primer</h1>";

// Integer
// Float
$price = null;
$money = 500.00;
$cents = 0.734;

// php - snake_case, ALLCAPS for global, constants, Class, Library
// js - camelCase, ALLCAPS for global, constants, Classes, Library
var_dump($money);
var_dump($cents);
var_dump($price);
$price = 9.99;
var_dump($price);

// Boolean
$state = True;
echo "<br/>";
var_dump($state);

// Array = array();
$colors = array("Red", "Green", "Blue");
echo "<br/></br>";
var_dump($colors);

$crayonbox = array("Red", "Green", "Blue", 0.5, 1);
echo "<br/></br>";
var_dump($crayonbox);

// NULL 
$velocity = null;
echo "<br/><br/>";
var_dump($velocity);

// echo at print --> console.log
// var_dump --> console.dir/ typeof
// . ---> ->


// Object
class Crayon {
    public $color, $number;

    public function __constructor($color, $number) {
        $this->color = $color;
        $this->number = $number;
    }

    public function draw($o_x, $o_y, $d_x, $d_y) {
        return "<br/>Drawing from \"point\" (${o_x}, ${o_y}) to the next point (${d_x}, $d_y)";
    }
}

$red = new Crayon("Red", "4");
echo "<br/>";
var_dump($red);
echo "<br/>";
echo $red->draw(1,1,5,5);
echo $red->color;
// echo $red->$number;

?></body></html>