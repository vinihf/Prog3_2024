<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("location:index.php");
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $pessoa = new Pessoa($_POST['nome'],$_POST['email']);
    $pessoa->setIdUsuario($_SESSION['idUsuario']);
    $pessoa->save();
    header("location: restrita.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Contato</title>
</head>
<body>
    <form action='formCadPessoa.php' method='POST'>
        Nome: <input name='nome' type='text' required>
        <br>
        E-mail: <input name='email' type='email' required>
        <br>
        <input type='submit' name='botao'>
    </form>
    <a href='restrita.php'>Voltar</a> | 
    <a href='sair.php'>Sair</a>
</body>
</html>

