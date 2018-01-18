<?php
//OR NOT AND
$a = true;
$b = "1";
$c = false;
$d = 0;
$a = ($a)? 'es verdadero ': 'es falso';
$a = $a??'es falso';

echo $a === $b;
echo $a !== $b;
echo $a == $b && $c == $d;
echo $a == $b || $c == $d;

$a = 1;
$b = 2;

echo $a > $b;
echo $a < $b;
echo $a >= $b;
echo $a <= $b;
echo $b <> $a; // !=
echo $b <=> $a;

if ($a == $b) {
    echo 'son iguales';
}  else if ($a < $b) {
    echo 'a es menor';
}  else {
    echo 'no se puede evaluar';
}
$a = 10;
switch ($a) {
    case 10:
        echo 'es 10';
    break;
    case 30:
        echo 'es 30';
    break;
    default:
        echo 'no se encuentra';
    break;
}



