<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("location:index.php");
}
require_once __DIR__."/vendor/autoload.php";

$contatos = Pessoa::findallByUsuario($_SESSION['idUsuario']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contatos</title>
</head>
<body>

<table>
    <tr>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Opções</td>
    </tr>
    <?php
    foreach($contatos as $contato){
        echo "<tr>";
        echo "<td>{$contato->getNome()}</td>";
        echo "<td>{$contato->getEmail()}</td>";
        echo "<td>
                <a href='formEditPessoa.php?id={$contato->getId()}'>Editar</a>
                <a href='excluirPessoa.php?id={$contato->getId()}'>Excluir</a> 
             </td>";
        echo "</tr>";
    }
    ?>
</table>
<a href='formCadPessoa.php'>Adicionar Contato</a> | 
<a href='sair.php'>Sair</a>
</body>
</html>






