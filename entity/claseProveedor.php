<?php
class claseProveedor
{
    private string $nombreProveedor;
    private string $telefonoProveedor;

    public function __construct()
    {
        
    }

    public function getNombreProveedor(){
        return $this->nombreProveedor;
    }
    public function setNombreProveedor($nomProveedor){
        $this->nombreProveedor=$nomProveedor;
    }
    public function getTelefonoProveedor(){
        return $this->telefonoProveedor;
    }
    public function setTelefonoProveedor($telProveedor){
        $this->telefonoProveedor=$telProveedor;
    }
}
