<?php
namespace App;

abstract class Mamifero {
    protected $nombre;
    protected $peso;
    protected $raza;
    protected $isDurmiendo = false;

    abstract public function comer ();
    /**
     * @return string
     */
    public function camina(): string
    {
        if (!$this->isDurmiendo) {
            return $this->nombre . ', Esta Caminando';
        }
        return $this->mensajeDurmiendo();
    }

    public function ladra(): string
    {
        if (!$this->isDurmiendo) {
            return $this->nombre . ', Esta ladrando';
        }
        return $this->mensajeDurmiendo();
    }

    public function duerme(): string
    {
        $this->isDurmiendo = true;
        return $this->nombre. ', Esta durmiendo';
    }

    public function despierta()
    {
        $this->isDurmiendo = false;
    }
}