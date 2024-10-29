<?php

class Pessoa implements ActiveRecord{

    private int $id;
    
    public function __construct(private string $nome,private string $email){
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getId():int{
        return $this->id;
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->id)){
            $sql = "UPDATE pessoas SET nome = '{$this->nome}' ,email = '{$this->email}' WHERE id = {$this->id}";
        }else{
            $sql = "INSERT INTO pessoas (nome,email) VALUES ('{$this->nome}','{$this->email}')";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM pessoas WHERE id = {$this->id}";
        return $conexao->executa($sql);
    }

    public static function find($id):Pessoa{
        $conexao = new MySQL();
        $sql = "SELECT * FROM pessoas WHERE id = {$id}";
        $resultado = $conexao->consulta($sql);
        $p = new Pessoa($resultado[0]['nome'],$resultado[0]['email']);
        $p->setId($resultado[0]['id']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM pessoas";
        $resultados = $conexao->consulta($sql);
        $pessoas = array();
        foreach($resultados as $resultado){
            $p = new Pessoa($resultado['nome'],$resultado['email']);
            $p->setId($resultado['id']);
            $pessoas[] = $p;
        }
        return $pessoas;
    }

    
}
