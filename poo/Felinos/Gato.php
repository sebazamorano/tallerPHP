<?php
namespace Fel;


class Gato extends Felinos {
    protected $amigo;

    public function amigo(Felinos $felino)
    {
        $this->amigo = $felino;
    }
}