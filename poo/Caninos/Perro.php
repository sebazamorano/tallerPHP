<?php
namespace Can;

class Perro extends Canino {
    protected $dueño;

    public function setDueño ($dueño)
    {
        $this->dueño = $dueño;
    }

    public function hasDueño():bool
    {
        return !!$this->dueño;
    }

}