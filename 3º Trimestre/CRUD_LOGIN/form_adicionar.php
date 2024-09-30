<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: index.php");
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
    <form method='post' action='addLivro.php'>
        <label for=titulo>Título</label>
        <input type=text id=titulo required name=titulo>
        <br>
        <label for=ano>Ano</label>
        <input type=number id=ano required name=ano>
        <br>
        <label for=autor>Autor(a)</label>
        <input type=text id=autor required name=autor>
        <br>
        <input type=submit name=botao value='Adicionar'>
    </form>
</body>
</html>