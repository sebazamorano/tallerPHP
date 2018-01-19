<?php
namespace Fel;

use App\Mamifero;

class Felinos extends Mamifero {

    /**
     * Perro constructor.
     * @param $nombre
     * @param $peso
     * @param $raza
     */
    public function __construct($nombre, $peso, $raza)
    {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->raza = $raza;
    }

    public function comer ()
    {
        return $this->nombre. ', Caza para comer';
    }
}