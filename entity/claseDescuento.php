<?php
class claseDesuento
{
    private string $nombreDescuento;
    private int $porcentajeDescuento;

    public function __construct()
    {
    }

    public function getNombreDescuento()
    {
        return $this->nombreDescuento;
    }
    public function setNombreDescuento($nomDescuento)
    {
        $this->nombreDescuento = $nomDescuento;
    }
    public function getPorcentajeDescuento()
    {
        return $this->porcentajeDescuento;
    }
    public function setPorcentajeDescuento($porceDescuento)
    {
        $this->porcentajeDescuento = $porceDescuento;
    }
}
