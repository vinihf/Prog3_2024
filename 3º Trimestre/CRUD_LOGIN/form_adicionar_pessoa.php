<?php
    if(isset($_POST['botao'])){
        $db = new mysqli('localhost','root','','colecao_livros');
        $password_hash = password_hash($_POST['senha'],PASSWORD_BCRYPT);
        $sql = "insert into pessoas (email,senha) values ('{$_POST['email']}','{$password_hash}')";
        $db->query($sql);
        header("location: index.php");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pessoa</title>
</head>
<body>
    <form method='post' action='form_adicionar_pessoa.php'>
        <label>E-mail:</label>
        <input type='text' name='email' require>
        <label>Senha:</label>
        <input type='password' name='senha' require>
        <input type='submit' name='botao' value='Adicionar'>
        <a href='index.php'>Voltar</a>
    </form>
</body>
</html>