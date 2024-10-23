<?php
class DVD{
    
    private string $titulo;

    public function __construct($titulo = null){
        $this->titulo = $titulo;
    }

    public function getTitulo():string{
        return $this->titulo;
    }

}