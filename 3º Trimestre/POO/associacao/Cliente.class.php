<?php
require_once "DVD.class.php";

class Cliente{
    
    private string $nome;
    private array $locados;

    public function __construct($nome = null){
        $this->nome = $nome;
    }

    public function locar(DVD $dvd ){
        $this->locados[] = $dvd;
    }

    public function getLocados():void{
        foreach($this->locados as $locado){
            echo $locado->getTitulo();
            echo "<br>";
        }
    }

}