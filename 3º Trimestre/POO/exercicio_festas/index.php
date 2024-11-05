<?php
require_once __DIR__."/vendor/autoload.php";
$festas = Festa::findall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Festas</title>
</head>
<body>

<table>
    <tr>
        <td>Nome</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Data</td>
        <td>Opções</td>
    </tr>
    <?php
    foreach($festas as $festa){
        echo "<tr>";
        echo "<td>{$festa->getNome()}</td>";
        echo "<td>{$festa->getEndereco()}</td>";
        echo "<td>{$festa->getCidade()}</td>";
        //Formata data para formato padrão do Brasil
        $dataFormatada = DateTime::createFromFormat("Y-m-d",$festa->getDia())->format("d/m/Y");
        echo "<td>{$dataFormatada}</td>";
        echo "<td>
                <a href='formEdit.php?idFesta={$festa->getIdFesta()}'>Editar</a>
                <a href='excluir.php?idFesta={$festa->getIdFesta()}'>Excluir</a> 
             </td>";
        echo "</tr>";
    }
    ?>
</table>
<a href='formCad.php'>Adicionar Festa</a>
</body>
</html>






