<?php
    if(isset($_GET)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "colecao_livros");
    
        //Query de consulta
        $query = "delete from livros where idLivro = {$_GET['idlivro']}";

        //Executa a consulta e armazena o resultado
        $resultado = $db->query($query);

        header("location:index.php");
    }
?>