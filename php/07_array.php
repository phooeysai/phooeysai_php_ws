<html><body><?php 

// your code here...

// array ==> array()
// constructor array()

// types: (1) indexed; (2) associative 

// indexed
$crayons = array("red", "green", "blue", "yellow");
var_dump($crayons);
echo "<br/><br/>";

echo $crayons[3];

// associative
$pencils = array("HB" => "0.50", "2B" => "1.2", "2H" => "0.30");
var_dump($pencils);
echo "<br/><br/>";


echo $pencils['2H'];
// echo $pencils[0];
echo "<br/><br/>";

// indexed and associated; mixed
$lunchbox = array("water", "chocolates", "lunch" => "hotdog", "drinks" => "juice", "tootpick");
var_dump($lunchbox);

echo "<br/><br/>";

echo $lunchbox[0].'<br/>';
echo $lunchbox[1].'<br/>';
echo $lunchbox[2].'<br/>';
// echo $lunchbox[3].'<br/>';
echo $lunchbox['lunch'].'<br/>';


// MULTIDIMENTIONAL ARRAY
// array of arrays
$bag = array(
    "notebooks" => array("math", "science", "pe", "filipino", "english"), // notebooks
    array("black pen", "red pen", "pencil", "eraser", "white ink"), // writing
    array("pogs", "marbles", "lego") // toys
);
echo "<br/><br/>";
var_dump($bag);
echo "<br/><br/>";

echo $bag[0][1].'<br/>';
echo $bag["notebooks"][1].'<br/>';

// array constructor -- array()
// array literal --- []
// array unpacking --- [...$array]; ===> spread operator
// add an item on the end of an array --- $array[] = $value; ===> array.push() in js
// delete an item --- unset($array[1]); ===> delete in js 
// deleting an entire array --- unset($array) ===> delete in js
// sort() --- ascending sort
// rsort() --- reverse sort


// ["blue", "red", "yellow"] --- sort() & rsort()
// ["color"=>"blue", "model"=>"vios", "make"=>"toyota"] --- asort() or ksort(); arsort() or krsort();
$colors = ["blue", "white", "red", "yellow"];
var_dump($colors);
echo "<br/><br/> Before sort:<br/>";
for($i = 0; $i < count($colors); $i++) {
    echo $colors[$i].'<br/>';
}

echo "<br/><br/> After sort:<br/>";
sort($colors);
for($i = 0; $i < count($colors); $i++) {
    echo $colors[$i].'<br/>';
}

echo "<br/><br/> After reversed sort:<br/>";
rsort($colors);
for($i = 0; $i < count($colors); $i++) {
    echo $colors[$i].'<br/>';
}

?></body></html>