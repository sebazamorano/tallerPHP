<?php
namespace App\VideoClub;


class VideoJuego implements Entregable
{
    protected $titulo;
    protected $horas = 3;
    protected $entregado = false;
    protected $genero;
    protected $compania;

    /**
     * VideoJuego constructor.
     * @param $titulo
     * @param int $horas
     * @param bool $entregado
     * @param $genero
     * @param $compania
     */
    public function __construct($titulo, $compania, $genero = null, int $horas = 3)
    {
        $this->titulo = $titulo;
        $this->horas = $horas;
        $this->genero = $genero;
        $this->compania = $compania;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return int
     */
    public function getHoras(): int
    {
        return $this->horas;
    }

    /**
     * @param int $horas
     */
    public function setHoras(int $horas): void
    {
        $this->horas = $horas;
    }

    /**
     * @return null
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param null $genero
     */
    public function setGenero($genero): void
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getCompania()
    {
        return $this->compania;
    }

    /**
     * @param mixed $compania
     */
    public function setCompania($compania): void
    {
        $this->compania = $compania;
    }

    public function entregar()
    {
        $this->entregado = true;
    }

    public function devolver()
    {
        $this->entregado = false;
    }

    public function isEntregado()
    {
        return $this->entregado;
    }

    public function __toString()
    {
        return "";
    }
}