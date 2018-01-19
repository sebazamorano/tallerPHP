<?php

class Persona {
    var $nombre;
    var $apellido;

    function nombreCompleto () {
        return $this->nombre . ' ' . $this->apellido;
    }
}
$persona = new Persona();
$persona->nombre = 'Sergio';
$persona->apellido = 'Chavez';
$persona->nombre = 'Luis';

$persona2 = new Persona();
$persona2->nombre = 'Deni';
$persona2->apellido = 'Chavez';

echo $persona->nombreCompleto() .', es hermano de ' .  $persona2->nombreCompleto();

class Cheque {
    protected $valor;
    protected $fecha;
    protected $firma;

    public function __construct(int $valor, Persona $firma)
    {
        $this->valor = $valor;
        $this->firma = $firma;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return mixed
     */
    public function getFirma()
    {
        return $this->firma;
    }

    public function getValor ()
    {
        return $this->valor;
    }

    public function setFecha ($fecha)
    {
        $this->fecha = $fecha;
    }

}

$cheque = new Cheque(1000, $persona2);
$cheque->setFecha('22/02/2018');

var_dump($cheque);
//Guardar en Base de Datos