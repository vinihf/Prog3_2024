<?php
if(isset($_GET['idFesta'])){
    require_once __DIR__."/vendor/autoload.php";
    $festa = Festa::find($_GET['idFesta']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $festa = new Festa($_POST['nome'],$_POST['endereco'],$_POST['cidade'],$_POST['dia']);
    $festa->setIdFesta($_POST['idFesta']);
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
    <title>Edita Festa</title>
</head>
<body>
    <form action='formEdit.php' method='POST'>
        <?php
            echo "Nome: <input name='nome' value='{$festa->getNome()}' type='text' required>";
            echo "<br>";
            echo "Endereço: <input name='endereco' value={$festa->getEndereco()} type='text' required>";
            echo "<br>";
            echo "Cidade: <input name='cidade' value={$festa->getCidade()} type='text' required>";
            echo "<br>";
            echo "Data: <input name='dia' value={$festa->getDia()} type='date' required>";
            echo "<br>";
            echo "<input name='idFesta' value={$festa->getIdFesta()} type='hidden'>";
        ?>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

