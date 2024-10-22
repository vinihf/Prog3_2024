<?php
require_once "Estadio.class.php";

class Time{
    
    public function __construct(private string $nome, private Estadio $estadio){

    }

    public function getNome():string{
        return $this->nome;
    }

    public function getEstadio():Estadio{
        return $this->estadio;
    }

}