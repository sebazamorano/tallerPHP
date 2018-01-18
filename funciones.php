<?php
declare(strict_types=1);
/*
 * @return int
 */
function suma(int $a, int $b): int {
    return $a + $b;
}



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
