<?php
namespace App\VideoClub;


interface Entregable
{
    public function entregar();
    public function devolver();
    public function isEntregado();
}