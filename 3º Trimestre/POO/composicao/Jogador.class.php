<?php

class Jogador{

    public function __construct(private string $posicao){

    }

    public function getPosicao():string{
        return $this->posicao;
    }

}