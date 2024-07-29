<?php
    if(isset($_GET)){
        //Conexão com o banco de dados
        $db = new mysqli("localhost", "root", "", "biblioteca");

        //Query de consulta
        $query = "select * from livros where idLivro = {$_GET['idlivro']}";

        $resultado = $db->query($query);

        $livro = $resultado->fetch_all(MYSQLI_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar livro</title>
</head>
<body>
    <form method='post' action='editLivro.php'>
        <label for=titulo>Título</label>
        <?php
            echo "<input type=text id=titulo required name=titulo value='{$livro[0]['titulo']}'>";
        ?>
        <br>
        <label for=ano>Ano</label>
        <?php
            echo "<input type=number id=ano required name=ano value={$livro[0]['ano']}>";
        ?>
        <br>
        <label for=autor>Autor(a)</label>
        <?php
            echo "<input type=text id=autor required name=autor value={$livro[0]['autor']}>";
        ?>        
        <br>
        <?php
            echo "<input type=hidden id=idlivro required name=idlivro value={$livro[0]['idLivro']}>";
        ?> 
        <input type=submit name=botao value='Editar'>
    </form>
</body>
</html>