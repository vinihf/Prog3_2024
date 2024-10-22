<?php

class Estadio{

    public function __construct(private int $capacidade){
    }

    public function getCapacidade():int{
        return $this->capacidade;
    }

}