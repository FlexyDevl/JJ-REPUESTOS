<?php
class claseCategoria
{
    private string $nombreCategoria;

    public function __construct()
    {
    }

    public function getNombreCategoria8()
    {
        return $this->nombreCategoria;
    }
    public function setNombreCategoria($nomCategoria){
        $this->nombreCategoria=$nomCategoria;
    }
}
