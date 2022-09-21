<?php
class claseOrden
{
    private string $estadoOrden;
    private int $costoSivaDesOrden;
    private int $costoDescuentoOrden;
    private int $costoIvaOrden;
    private int $costoTotalOrden;

    public function __construct()
    {
    }

    public function getEstadoOrden()
    {
        return $this->estadoOrden;
    }
    public function setEstadoOrden($estOrden)
    {
        $this->estadoOrden = $estOrden;
    }
    public function getCostoSivaDesOrden()
    {
        return $this->costoSivaDesOrden;
    }
    public function setCostoSivaDesOrden($costSIDOrden)
    {
        $this->costoSivaDesOrden = $costSIDOrden;
    }
    public function getCostoDescuentoOrden()
    {
        return $this->costoDescuentoOrden;
    }
    public function setCostoDescuentoOrden($costDescOrden)
    {
        $this->costoDescuentoOrden = $costDescOrden;
    }
    public function getCostoIvaOrden()
    {
        return $this->costoIvaOrden;
    }
    public function setCostoIvaOrden($costIvaOrden)
    {
        $this->costoIvaOrden = $costIvaOrden;
    }
    public function getCostoTotalOrden()
    {
        return $this->costoTotalOrden;
    }
    public function setCostoTotalOrden($costTotalOrden)
    {
        $this->costoTotalOrden = $costTotalOrden;
    }
}
