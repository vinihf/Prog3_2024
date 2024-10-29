<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $pessoa = new Pessoa($_POST['nome'],$_POST['email']);
    $pessoa->save();
    header("location: index.php");
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
    <form action='formCad.php' method='POST'>
        Nome: <input name='nome' type='text' required>
        <br>
        E-mail: <input name='email' type='email' required>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

