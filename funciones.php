<?php
declare(strict_types=1);
/*
 * @return int
 */
function suma(int $a, int $b): int {
    return $a + $b;
}


function infinito(...$a) {
    var_dump($a);
}

infinito('1', '2', '4');

function saludo(string &$nombre, string $apellido = null): string {
    $nombre = 'otro nombre';
    return 'Hola, ' . $nombre . ' ' . $apellido;
}
$nombre = "sebastian";
//echo saludo($nombre, "Zamorano");

function cambiaColor(&$color) {
    $color = "amarillo";
}
$color = "rojo";
cambiaColor($color);

echo $color;

echo $nombre;

$a = function ($nombre) {
    return 'Hola ' . $nombre;
};

//echo $a("sebastian");

//var_dump(suma(2, 2));

//Ordenamiento por seleccion
$numero = ["8","7","1","9","2","6","3","4","5","10","8","7","1","9","2","6","3","4","5","10"];
$k = 0;
$i = 0;
$j=0;
for($i = 0; $i < sizeof($numero) - 1; $i++) {
    for ($k = $i, $j = $i + 1; $j < sizeof($numero); $j++) {
        if ($numero[$j] < $numero[$k]) {
            $tmp = $numero[$i];
            $numero[$k] = $numero[$j];
            $numero[$j] = $tmp;
        }
    }
}

// Ordenamiento Burbuja

$numero = ["8","7","1","9","2","6","3","4","5","10"];

for ($i = 1; $i < sizeof($numero); $i++) {
    for ($j = 0; $j < sizeof($numero) - $i; $j++) {
        if ($numero[$j] > $numero[$j + 1]) {
            $tmp = $numero[$j + 1];
            $numero[$j + 1] = $numero[$j];
            $numero[$j] = $tmp;
        }
    }
}

$fecha = new DateTime('1988-01-09');
$time = new DateTime();
//print_r($time->diff($fecha));

for ($i = 1, $j = $i + 1; $i <= 20; $i ++) {
    echo $i + $j;
}
