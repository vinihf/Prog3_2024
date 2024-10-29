<?php
if(isset($_GET['id'])){
    require_once __DIR__."/vendor/autoload.php";
    $pessoa = Pessoa::find($_GET['id']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $pessoa = new Pessoa($_POST['nome'],$_POST['email']);
    $pessoa->setId($_POST['id']);
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
    <form action='formEdit.php' method='POST'>
        <?php
            echo "Nome: <input name='nome' value='{$pessoa->getNome()}' type='text' required>";
        ?>
        <br>
        <?php
            echo "E-mail: <input name='email' value={$pessoa->getEmail()} type='email' required>";
            echo "<input name='id' value={$pessoa->getId()} type='hidden'>";
        ?>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

