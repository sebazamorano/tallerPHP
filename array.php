<?php

$array = [1,2,3,4, "nombre", 3.4, [1,2, [2,3]]];
var_dump($array);
$a = [1,2,3,4,5];
$ultimo = array_pop($a);
var_dump($a);
array_push($a, 6);
var_dump($a);

array_shift($a);
var_dump($a);
array_unshift($a, 44);
var_dump($a);
$b = [1, 2, 4];
var_dump(array_diff($a, $b));

