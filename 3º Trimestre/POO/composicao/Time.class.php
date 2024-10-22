<?php
require_once "Jogador.class.php";

class Time{
    
    private array $jogadores;

    public function __construct(private string $nome){
    }

    public function getNome():string{
        return $this->nome;
    }

    public function getEstadio():Estadio{
        return $this->estadio;
    }

    public function adicionaJogador(string $posicao):bool{
        $jogador = new Jogador($posicao);
        $this->jogadores[] = $jogador;
        return true;
    }

    public function getJogadores():void{
        foreach($this->jogadores as $jogador){
            echo $jogador->getPosicao();
            echo "<br>";
        }
    }

}