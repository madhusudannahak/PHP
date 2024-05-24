<?php
$abc="Abhay";
echo $abc;
echo "<br>";
var_dump ($abc);
echo "<br>";
function abc($a,$b)
{
    return $a*$b;
}
echo abc(4,5);
echo "<br>";

$firstArray=array(4,5,6,7);
// var_dump( );
// echo ($firstArray);
print_r($firstArray);
echo "<br>";
echo implode(",",$firstArray);
echo "<br>";

// Conditional statements
$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
echo "<br>";
// Loop example
for ($i = 1; $i <= 5; $i++) {
    echo $i . ", ";

}
echo "<br>";

function xyz($abc)
{
    echo "Hello, $abc!";
}
xyz("Abhay");
echo "<br>";

// Indexed array
$fruits = array("Apple", "Banana", "Orange");

// Associative array
$person = array("name" => "John", "age" => 30, "city" => "New York");
var_dump($person);
echo implode($person);



?>



