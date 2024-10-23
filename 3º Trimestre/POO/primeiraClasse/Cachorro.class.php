<?php

class Cachorro{


    public function __construct(private string $nome = ""){
    }

    public function latir():string{
        return "Au Au Au";
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

}
