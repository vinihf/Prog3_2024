<?php

class ContaBancaria{

    public function __construct(protected float $saldo){
    }

    public function getSaldo():float{
        return $this->saldo;
    }

    public function sacar(float $valor):float{
        if(($this->saldo-$valor)>=0){
            $this->saldo-=$valor;
            return $this->saldo;
        }else{
            return $this->saldo;
        }
    }

    public function depositar(float $valor):float{
        $this->saldo+=$valor;
        return $this->saldo;
    }
}