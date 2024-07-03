<?php

// Diretório onde será realizado o upload do arquivo
$diretorioDestino = "arquivos/";

/*
A superglobal $_FILES contém as seguintes informações sobre:
    ['name'] = nome do arquivo
    ['full_path'] = nome do arquivo
    ['type'] = tipo do arquivo
    ['tmp_name'] = nome temporário
    ['size'] = tamanho em bytes do arquivo
    ['error'] = possível erro na submissão
*/

/* Existem diferentes erros que podem ser verificados. Mais detalhes em: https://www.php.net/manual/en/features.file-upload.errors.php */
if($_FILES['arquivo']['error'] != 0 ){
    header("location: index.html");
}

/*
Tamanho do arquivo:
$KB = $_FILES['arquivo']['size'] / 1024;

// Tamanho em megabytes
$MB = $_FILES['arquivo']['size'] / (1024 * 1024);
*/
$tamanhoMB = $_FILES['arquivo']['size'] / (1024*1024);


//Para extrair a extensão do arquivo
$extensão = strtolower(pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION));

//Caminho onde o arquivo será armazenado
$destinoArquivo = $diretorioDestino.$_FILES['arquivo']['name'];


if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$destinoArquivo)){
    echo "Tamanho do arquivo: ".$tamanhoMB." MB";
    echo "<br>";
    echo "Extensão do arquivo: ".$extensão;
    echo "<br>";
    echo "Status: Armazenado";
    echo "<br>";
    echo "Caminho: <a href='{$destinoArquivo}'>{$_FILES['arquivo']['name']}</a>";
}else{
    echo "Tamanho do arquivo: ".$tamanhoMB." MB";
    echo "<br>";
    echo "Extensão do arquivo: ".$extensão;
    echo "<br>";
    echo "Status: {$_FILES['arquivo']['error']}";
}


