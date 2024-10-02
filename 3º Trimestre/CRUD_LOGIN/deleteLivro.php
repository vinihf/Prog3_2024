<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: index.php");
}

    if(isset($_GET)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "colecao_livros");
        
        $id_livro = filter_var($_GET['idlivro'],FILTER_SANITIZE_NUMBER_INT);
        
        $stmt = $db->prepare("delete from livros where idLivro = ?");
        
        $stmt->bind_param("i",$id_livro);
        
        $stmt->execute();

        header("location:restrita_lista.php");
    }
?>