<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: index.php");
}

    if(isset($_POST)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "colecao_livros");
    
        $titulo = htmlspecialchars($_POST['titulo']);
        $autor = htmlspecialchars($_POST['autor']);
        $ano = filter_var($_POST['ano'],FILTER_SANITIZE_NUMBER_INT);
        $id_livro = $_SESSION['idLivro'];

        //Query de consulta
        $stmt = $db->prepare("update livros set titulo = ?, ano = ? , autor = ? where idlivro = ?");

        $stmt->bind_param("sisi",$titulo,$ano,$autor,$id_livro);

        //Executa a consulta e armazena o resultado
        $stmt->execute();

        header("location:restrita_lista.php");
    }
?>