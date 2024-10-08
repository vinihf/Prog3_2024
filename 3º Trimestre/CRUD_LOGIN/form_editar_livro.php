<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: index.php");
}
    if(isset($_GET)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "colecao_livros");

        $stmt = $db->prepare("select * from livros where idLivro = ?");
        
        $idLivro = filter_var($_GET['idlivro'],FILTER_SANITIZE_NUMBER_INT);

        $stmt->bind_param("i",$idLivro);

        $stmt->execute();

        $resultado = $stmt->get_result();

        $livro = $resultado->fetch_assoc();

        $_SESSION["idLivro"] = $livro['idLivro'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class='container'>
        <div class='box'>
            <h1>Editar livro</h1>
            <form method='post' action='editLivro.php'>
                <label for=titulo>Título</label>
                <?php
                    echo "<input type=text id=titulo required name=titulo value='{$livro['titulo']}'>";
                ?>
                <label for=ano>Ano</label>
                <?php
                    echo "<input type=number id=ano required name=ano value={$livro['ano']}>";
                ?>
                <label for=autor>Autor(a)</label>
                <?php
                    echo "<input type=text id=autor required name=autor value='{$livro['autor']}'>";
                ?>
                <div class='grupo_botao'>
                    <input type=submit name=botao value='Editar'>
                </div>        
            </form>
        </div>
        <a href='logout.php'>Sair</a>
        <a href='restrita_lista.php'>Voltar</a>
    </div>  
</body>
</html>