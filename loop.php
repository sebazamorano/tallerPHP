<?php
$a = true;
while ($a) {
    echo 'Se ejecuto';
    $a = false;
}

do{
    echo 'Anda a comprar';
} while($a);
$array = [1,3,5,6];


$array1 =  [

      3,4,5,6

];

foreach ($array1 as $key => $a) {
    echo $key;
}


for ($j = 0; $j < count($array); $j++) {
    //echo $array[$j];
}

for ($i = 1; $i <= 50; $i++) {
    //echo $i;
}