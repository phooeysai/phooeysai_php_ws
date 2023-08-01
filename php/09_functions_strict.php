<html><body><?php // declare(strict_types=1);

$code = 99;
$tag = 88;
$val = 77;


// function with data type for each parameter
function summation (int $a, int $b, int $c) {
    $result = $a + $b + $c;
    echo "The sum of all inputs is $result";
}

summation(1,2,3);

// summation('Lean', "L", 6);

echo "<br/><br/>";


// function with return, data type of return value is defined
// pass by value;
function addition (int $a, int $b, int $c) : int {
    $result = $a + $b + $c;
    // echo "The sum of all inputs is $result";
    return $result;
    // return "true";
    // return $a + $b + $c;
}

$sum = addition(9, 8, 7);
var_dump($sum);
$anotherSum = $sum + 9;
echo "<br/>Current sum is $sum";
echo "<br/>Another sum is $anotherSum";

// Passing arguments
// 1. PassByValue === function receives a copy of the argument func a($x)  
//                ====> a(3) ====> a($addends)
// 2. PassByRef   === function use the existing value by referencing the memory address
//                ====> a(&$addends)



addition($code, $tag, $val); 



// pass by reference
function additionByRef (int &$a, int &$b, int &$c) : int {
    $result = $a + $b + $c;
    echo "<br/><br/>The sum of all inputs is $result";
    return $result;
    // return "true";
    // return $a + $b + $c;
}

// pass by ref
additionByRef($code, $tag, $val);

function overScoped () {
    echo "<br/><br/> The value of variable code is ".$GLOBALS['code'];
}

overScoped();

echo "<br/><br/>";
echo "<pre>";
print_r($GLOBALS['val']);
print_r($GLOBALS);
echo "</pre><br/>";

echo "<pre>";
print_r($_GET);
echo "</pre><br/>";

echo "<pre>";
print_r($_POST);
echo "</pre><br/>";

echo "<pre>";
print_r($_ENV);
echo "</pre><br/>";

echo "<pre>";
print_r($_COOKIE);
echo "</pre><br/>";

echo "<pre>";
// print_r($_SESSION);
echo "</pre><br/>";

echo "<pre>";
print_r($_FILES);
echo "</pre><br/>";

echo "<pre>";
print_r($_SERVER);
echo "</pre><br/>";

echo "<pre>";
print_r($_REQUEST);
echo "</pre><br/>";

echo "<pre>";
// print_r($_HOST);
echo "</pre><br/>";

// Superglobals
// 1. $GLOBALS
// 2. $_POST
// 3. $_GET
// 4. $_ENV
// 5. $_COOKIE
// 6. $_SESSION
// 7. $_FILES
// 8. $_SERVER
// 9. $_REQUEST
// 10. $_HOST ?????

?>

</body></html>