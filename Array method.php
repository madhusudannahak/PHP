<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Methods</title>
</head>
<body>
    <h1>PHP Array Methods</h1>

    <?php
    // Sample array
    $array = [1, 2, 3, 4, 5];

    // array_push: Adds one or more elements to the end of an array
    array_push($array, 6, 7);
    echo "After array_push: ";
    print_r($array);
    echo "<br>";

    // array_pop: Pops the element off the end of array
    array_pop($array);
    echo "After array_pop: ";
    print_r($array);
    echo "<br>";

    // array_unshift: Adds one or more elements to the beginning of an array
    array_unshift($array, 0);
    echo "After array_unshift: ";
    print_r($array);
    echo "<br>";

    // array_shift: Shifts the first value of the array off
    array_shift($array);
    echo "After array_shift: ";
    print_r($array);
    echo "<br>";

    // array_merge: Merges one or more arrays
    $array2 = [8, 9, 10];
    $merged = array_merge($array, $array2);
    echo "After array_merge: ";
    print_r($merged);
    echo "<br>";

    // array_diff: Computes the difference of arrays
    $array3 = [2, 3, 4];
    $difference = array_diff($merged, $array3);
    echo "After array_diff: ";
    print_r($difference);
    echo "<br>";

    // array_intersect: Computes the intersection of arrays
    $intersection = array_intersect($merged, $array3);
    echo "After array_intersect: ";
    print_r($intersection);
    echo "<br>";

    // array_map: Applies the callback to the elements of the given arrays
    $squared = array_map(function($value) {
        return $value * $value;
    }, $array);
    echo "After array_map (square): ";
    print_r($squared);
    echo "<br>";

    // array_filter: Filters elements of an array using a callback function
    $filtered = array_filter($array, function($value) {
        return $value > 3;
    });
    echo "After array_filter (>3): ";
    print_r($filtered);
    echo "<br>";

    // array_reduce: Iteratively reduce the array to a single value using a callback function
    $sum = array_reduce($array, function($carry, $item) {
        return $carry + $item;
    }, 0);
    echo "After array_reduce (sum): $sum<br>";

    // array_keys: Return all the keys or a subset of the keys of an array
    $keys = array_keys($merged);
    echo "After array_keys: ";
    print_r($keys);
    echo "<br>";

    // array_values: Return all the values of an array
    $values = array_values($merged);
    echo "After array_values: ";
    print_r($values);
    echo "<br>";

    // array_key_exists: Checks if the given key or index exists in the array
    $keyExists = array_key_exists(2, $merged);
    echo "After array_key_exists (key 2): " . ($keyExists ? "true" : "false") . "<br>";

    // array_reverse: Return an array with elements in reverse order
    $reversed = array_reverse($array);
    echo "After array_reverse: ";
    print_r($reversed);
    echo "<br>";

    // sort: Sort an array
    sort($array);
    echo "After sort: ";
    print_r($array);
    echo "<br>";

    // rsort: Sort an array in reverse order
    rsort($array);
    echo "After rsort: ";
    print_r($array);
    echo "<br>";

    // asort: Sort an array and maintain index association
    asort($array);
    echo "After asort: ";
    print_r($array);
    echo "<br>";

    // arsort: Sort an array in reverse order and maintain index association
    arsort($array);
    echo "After arsort: ";
    print_r($array);
    echo "<br>";

    // ksort: Sort an array by key
    ksort($array);
    echo "After ksort: ";
    print_r($array);
    echo "<br>";

    // krsort: Sort an array by key in reverse order
    krsort($array);
    echo "After krsort: ";
    print_r($array);
    echo "<br>";
    ?>
</body>
</html>
