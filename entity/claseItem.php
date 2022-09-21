<?php
class calseItem
{
    private string $nombreItem;
    private string $descripcionItem;
    private int $costoItem;
    private int $stockItem;

    public function __construct()
    {
    }

    public function getNombreItem()
    {
        return $this->nombreItem;
    }
    public function setNombreItem($nomItem)
    {
        $this->nombreItem = $nomItem;
    }
    public function getDescripcionItem()
    {
        return $this->descripcionItem;
    }
    public function setDescripcionItem($descripItem)
    {
        $this->descripcionItem = $descripItem;
    }
    public function getCostoItem()
    {
        return $this->costoItem;
    }
    public function setCostoItem($cosItem)
    {
        $this->costoItem = $cosItem;
    }
    public function getStockItem()
    {
        return $this->stockItem;
    }
    public function setStockItem($stckItem)
    {
        $this->stockItem = $stckItem;
    }
}
