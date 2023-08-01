<html><body><?php 

// your code here...

// ?:

// if statement
$status = false; 
if (!$status) {
    echo "<br/> Current status is ".var_dump($status);
}

if (!$status) echo "<br/> Current status is $status";


// $status === true  ===> $status
// $status !== false ===> !$status

// if-else
$code = 0;
if($code > 2) {
    echo "<br/> Current code is critical with value $code";
} else {
    echo "<br/> Current code is not critical with value $code";
}

// only one will happen
// first is optional, second will always happen

function endWillAlwaysHappen($status) {
    if($status) {
        echo "<br/> Optional step will be executed.";
    } else {
        echo "<br/> This step should always happen.";
    }
}

endWillAlwaysHappen(true);

function endWillAlwaysHappenNow($status) {
    if($status) {
        echo "<br/> Optional step will be executed.";
    }
    echo "<br/> This step should always happen.";
}
endWillAlwaysHappenNow(true);

function endWillAlwaysHappenNowSlim($status) {
    if($status) echo "<br/> Optional step will be executed.";
    echo "<br/> This step should always happen.";
}
endWillAlwaysHappenNowSlim(true);

// if-else-if
$tag = 'C'; // A, B, C
if($tag === 'A') {
    echo "<br/> Current tag is grade $tag";
} elseif ($tag === 'B') {
    echo "<br/> Current tag is not A but grade $tag";
} else {
    echo "<br/> Current tag is grade $tag";
}


// if-else-if, can be rewritten as switch statement
$tag = 'A';
switch ($tag) {
    case 'A':
        echo "<br/> Current tag is alpha.";
        break;
    
    case 'B':
        echo "<br/> Current tag is beta.";
        break;

    case 'C':
        echo "<br/> Current tag is charlie.";
        break;
    
    default:
    echo "<br/> Current tag is unknown.";
}


// LOOPS

// for loop
// for (init; test; in/decrement) {}
echo "<br/><br/>";
for($i = 1; $i < 20; $i += 2) {
    echo "<br/> The current couter is $i";
}

// for loop with break & continue;
// break;
echo "<br/><br/>";
for($i = 1; $i < 20; $i += 2) {
    if($i > 10) break;
    echo "<br/> The current couter is $i";
}

// continue;
echo "<br/><br/>";
for($i = 0; $i < 20; $i += 2) {
    if($i === 10 || $i === 16) continue;
    echo "<br/> The current couter is $i";
}

echo "<br/><br/>";
for($i = 0; $i < 20; $i++) {
    if($i % 2 === 0) continue;
    echo "<br/> The current couter is $i";
}


// FOR EACH
// foreach (collection as item) {}
echo "<br/><br/>";
$crayons = array("red", "purple", "white", "green", "black");

foreach ($crayons as $crayon) {
    echo "<br/> Current crayon: $crayon";
}

// foreach key and value
echo "<br/><br/>";
$crayonsBox = array("red"=>"007", "purple"=>"013", "white"=>"001", "green"=>"009", "black"=>"002");

foreach ($crayonsBox as $color => $colorNumber) {
    echo "<br/> Current color is {{$color}} with a number of [$colorNumber]";
}


// WHILE
// while (condition) {} --> 0 or more
// do {} while (conditio) --> 1 or more
$goal = 99;
echo "<br/><br/>";
while ($goal > 100) {
    echo "<br/> Goal remaining is: $goal";
    $goal -= 300;
}

do {
    echo "<br/> Goal remaining is: $goal";
    $goal -=300;
} while ($goal > 100);




?></body></html>