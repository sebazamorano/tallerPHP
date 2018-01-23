<?php
include_once 'vendor/autoload.php';


/*
use Can\Perro;
use Fel\Gato;

$perro = new Perro('Seba', 10, 'Poodle');
echo $perro->camina();
echo $perro->ladra();
echo $perro->duerme();
echo $perro->camina();
$perro->despierta();
echo $perro->ladra();
echo $perro->comer();
echo '<br>';
$gato = new Gato('Felix', 9, 'Angora');
//echo $gato->comer();

$amigo = new Gato('Gato con Botas', 30, 'Gato con Bota');
$gato->amigo($amigo);
//var_dump($gato);
*/

use App\VideoClub\Serie;
use App\VideoClub\VideoJuego as Juego;
$aSeries = [];
$aSeries[0] = new Serie('Mr Robot', 'Sam Esmail', 'Drama televisivo');
$aSeries[1] = new Serie('Ozark', 'Netflix');

$aVideoJuegos = [];
$aVideoJuegos[0] = new Juego('Pac-Man', 'Toru Iwatani', 'diversion', 6);
$aVideoJuegos[1] = new Juego('God of Wars', 'SCE Santa Monica Studio', 'Accion', 12);


foreach ($aSeries as $serie) {
    $serie->entregar();
}

foreach($aVideoJuegos as $videoJuego) {
    $videoJuego->entregar();
}

var_dump($aSeries);
var_dump($aVideoJuegos);

$aVideoJuegos[0]->devolver();

$contador = 0;
$entregados = [];
foreach($aVideoJuegos as $videoJuego) {
    if ($videoJuego->isEntregado()) {
        $contador++;
        $entregados[] = $videoJuego;
    }
}

var_dump($entregados);


