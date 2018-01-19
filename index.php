<?php
include_once 'vendor/autoload.php';

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
echo $gato->comer();

$amigo = new Gato('Gato con Botas', 30, 'Gato con Bota');
$gato->amigo($amigo);
var_dump($gato);