<?php
    if(isset($_POST)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "biblioteca");
    
        //Query de consulta
        $query = "update livros set titulo = '{$_POST['titulo']}', ano = {$_POST['ano']} , autor = '{$_POST['autor']}' where idlivro = {$_POST['idlivro']}";

        //Executa a consulta e armazena o resultado
        $resultado = $db->query($query);

        header("location:index.php");
    }
?>