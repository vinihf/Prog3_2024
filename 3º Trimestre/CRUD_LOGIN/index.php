<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='login.php' method='post'>
        <label>E-mail:</label>
        <input type='text' name='email' require>
        <label>Senha:</label>
        <input type='password' name='senha' require>
        <input type='submit' name='botao' value='Acessar'>
        <a href='form_adicionar_pessoa.php'>Adicionar nova pessoa</a>
    </form>
</body>
</html>