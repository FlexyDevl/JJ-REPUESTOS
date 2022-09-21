<?php
class claseFoto
{
    private string $nombreFoto;
    private string $pathFoto;

    public function __construct()
    {
    }

    public function getNombreFoto()
    {
        return $this->nombreFoto;
    }
    public function setNombreFoto($nomFoto)
    {
        $this->nombreFoto = $nomFoto;
    }
    public function getPathFoto()
    {
        return $this->pathFoto;
    }
    public function setPathFoto($patFoto)
    {
        $this->pathFoto = $patFoto;
    }
}
