<html><body><?php 

// 1. global
// 2. local
// 3. static

// your code here...
echo "Connected!";
echo "<br/><br/>";

// global variable
$count = 5;

echo "Display global var from global statement: " . $count;

// local variable
echo "<br/><br/>";

function logger() {
    $counter = 0; // <---- this is a local variable
    echo "Current value of counter is: " . $counter;
}

logger();

// Line below will not render result due to variable scoping issue
// echo "Display local var from global statement: " . $counter;


// static
echo "<br/><br/>";
function incrementor() {
    static $immortal = 100;
    echo "<br/>Immortal counter value: " . $immortal++;
}

incrementor(); // value is 100
incrementor(); // value is now 101
incrementor(); // value is now 102

// Line below will not render result due to variable scoping issue even if variable is a static one
// echo "Display local var from global statement: " . $immortal;

?></body></html>