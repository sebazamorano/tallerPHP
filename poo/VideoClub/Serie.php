<?php
namespace App\VideoClub;


class Serie implements Entregable
{
    protected $titulo;
    protected $temporadas = 3;
    protected $entregado = false;
    protected $genero;
    protected $creador;

    /**
     * Serie constructor.
     * @param $titulo
     * @param int $temporadas
     * @param bool $entregado
     * @param $genero
     * @param $creador
     */
    public function __construct($titulo, $creador, $genero = null, int $temporadas = 3)
    {
        $this->titulo = $titulo;
        $this->temporadas = $temporadas;
        $this->genero = $genero;
        $this->creador = $creador;
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
    public function getTemporadas(): int
    {
        return $this->temporadas;
    }

    /**
     * @param int $temporadas
     */
    public function setTemporadas(int $temporadas): void
    {
        $this->temporadas = $temporadas;
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
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * @param mixed $creador
     */
    public function setCreador($creador): void
    {
        $this->creador = $creador;
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
    /**
     * @return string
     */
    public function __toString()
    {
        return "La Serie se llama: {$this->titulo}, Nº temporadas: {$this->temporadas}";
    }
}