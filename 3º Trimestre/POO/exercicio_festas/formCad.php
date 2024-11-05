<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $festa = new Festa($_POST['nome'],$_POST['endereco'],$_POST['cidade'],$_POST['dia']);
    $festa->save();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Festa</title>
</head>
<body>
    <form action='formCad.php' method='POST'>
        Nome: <input name='nome' type='text' required>
        <br>
        Endereço: <input name='endereco' type='text' required>
        <br>
        Cidade: <input name='cidade' type='text' required>
        <br>
        Data: <input name='dia' type='date' required>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

