<?php
class claseCliente
{
    private string $nombreCliente;
    private string $apellidoCliente;
    private String $tipoDocumentoCliente;
    private int $numeroDocumentoCliente;
    private string $provinciaCliente;
    private string $ciudadCliente;
    private string $codigoPostalCliente;
    private string $emailCliente;

    public function __construct()
    {
    }

    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }
    public function setNombreCliente($nomCli)
    {
        $this->nombreCliente = $nomCli;
    }
    public function getApellidoCliente()
    {
        return $this->apellidoCliente;
    }
    public function setApellidoCliente($apeCli)
    {
        $this->apellidoCliente = $apeCli;
    }
    public function getTipoDocumentoCliente()
    {
        return $this->tipoDocumentoCliente;
    }
    public function setTipoDocumentoCliente($tipoDocCli)
    {
        $this->tipoDocumentoCliente = $tipoDocCli;
    }
    public function getNumeroDocumentoCliente()
    {
        return $this->numeroDocumentoCliente;
    }
    public function setNumeroDocumentoCliente($numDocCli)
    {
        $this->numeroDocumentoCliente = $numDocCli;
    }
    public function getProvinciaCliente()
    {
        return $this->provinciaCliente;
    }
    public function setProvinciaCliente($provinCli)
    {
        $this->provinciaCliente = $provinCli;
    }
    public function getCiudadCliente()
    {
        return $this->ciudadCliente;
    }
    public function setCiudadCliente($ciuCli)
    {
        $this->ciudadCliente = $ciuCli;
    }
    public function getCodigoPostalCliente()
    {
        return $this->codigoPostalCliente;
    }
    public function setCodigoPostalCliente($codPostCli)
    {
        $this->codigoPostalCliente = $codPostCli;
    }
    public function getEmailCliente()
    {
        return  $this->emailCliente;
    }
    public function setEmailCliente($emaCli)
    {
        $this->emailCliente = $emaCli;
    }
}
