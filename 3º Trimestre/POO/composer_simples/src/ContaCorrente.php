<?php

require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria{

    public function __construct(private float $limite,protected float $saldo){
        parent::__construct($saldo);
        $this->limite = $limite;
    }
    
    public function sacar(float $valor):float{
        if($valor<=$this->limite){
            if($this->saldo-$valor>=0){
                $this->saldo-=$valor;
                return $this->saldo;
            }
        }else{
            return $this->saldo;
        }
    }
}