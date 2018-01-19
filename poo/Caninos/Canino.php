<?php
namespace Can;

use App\Mamifero;

class Canino extends Mamifero {
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

    protected function mensajeDurmiendo ()
    {
        return 'Esta duermiendo';
    }

    public function comer ()
    {
        return $this->nombre. ', Come pellet';
    }

}