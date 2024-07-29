<?php
    if(isset($_POST)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "biblioteca");
    
        //Query de consulta
        $query = "insert into livros (titulo,ano,autor) values ('{$_POST['titulo']}',{$_POST['ano']},'{$_POST['autor']}')";

        //Executa a consulta e armazena o resultado
        $resultado = $db->query($query);

        header("location:index.php");
    }
?>