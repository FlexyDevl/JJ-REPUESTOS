<?php
class claseCompra{
    private string $estadoCompra;
    private string $tipoPagoCompra;

    public function __construct()
    {
        
    }

    public function getEstadoCompra(){
        return $this-> estadoCompra;
    }
    public function setEstadoCompra($estCompra){
        $this-> estadoCompra=$estCompra;
    }
    public function getTipoPagoCompra(){
        return $this-> tipoPagoCompra;
    }
    public function setTipoPagoCompra($tipPagCompra){
        $this-> tipoPagoCompra=$tipPagCompra;
    }
}