<?php
class claseUsuario{
    private string $nickUsuario;
    private string $passwordUsuario;

    public function __construct()
    {
        
    }

    public function getNickUsuario(){
        return $this->nickUsuario;
    }
    public function setNickUsuario($nickUsu){
        $this->nickUsuario=$nickUsu;
    }
    public function getPasswordUsuario(){
        return $this->passwordUsuario;
    }
    public function setPasswordUsuario($passwordUsu){
        $this->passwordUsuario=$passwordUsu;
    }
}