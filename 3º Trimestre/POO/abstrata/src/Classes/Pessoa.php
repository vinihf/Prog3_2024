<?php
namespace Classes;

abstract class Pessoa{
    
    public function __construct(private string $nome){
    }

    public function getNome():string{
        return $this->nome;
    }

    abstract public function atividade():void;
}
