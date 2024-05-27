<?php
$a = 10;
$b = "10";
$c = 20;

// Equal (==)
echo "\$a == \$b : ";
var_dump($a == $b); // true because values are equal

// Identical (===)
echo "\$a === \$b : ";
var_dump($a === $b); // false because types are different

// Not equal (!=)
echo "\$a != \$c : ";
var_dump($a != $c); // true because values are different

// Not equal (<>)
echo "\$a <> \$c : ";
var_dump($a <> $c); // true because values are different

// Not identical (!==)
echo "\$a !== \$b : ";
var_dump($a !== $b); // true because types are different

// Less than (<)
echo "\$a < \$c : ";
var_dump($a < $c); // 
