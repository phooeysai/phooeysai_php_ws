<html><body><?php 

// your code here...
// function <func_name> (...args) {}


// function with required parameters
function shout ($name, $msg) {
    echo "<br/>Hello! $name. I have received your msgs --- $msg";
}

shout('Lean', 'Organize the class for Capstone');
shout(99947, 0x5688999988);

echo '<br/><br/>';

// function with optional parameters
function greet ($name, $msg = "Hello, World! Welcome") {
    echo "$name, $msg to this bootcamp.";
}

greet ("Lean");

echo '<br/><br/>';

function summation ($a, $b, $c) {
    $result = $a + $b + $c;
    echo "The sum of all inputs is $result";
}

echo '<br/><br/>';
summation(1,2,3);
// summation('Lean', "L", 6)

?>

<h3>This part will be rendered as is.</h3>

</body></html>