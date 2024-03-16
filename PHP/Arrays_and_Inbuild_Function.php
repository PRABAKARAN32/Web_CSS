<?

$arr = [
    "one" => 1,
    "Two" => 2,
    "Three" => 3,
    "Four" => 4
];

print_r($arr);

//Reverse of an Array

print_r(array_reverse($arr));

print_r(array_keys($arr));

print_r(array_values($arr));

print_r(array_flip($arr));

$arr_pad = array_pad($arr,10,"Empty");

print_r($arr_pad);

print(count($arr)."\n");


?>