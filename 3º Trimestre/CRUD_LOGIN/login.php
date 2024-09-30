<?php
if(!isset($_POST['botao'])){
    header("location: index.php");
}
$db = new mysqli("localhost","root","","colecao_livros");
$sql = "select * from pessoas where email = '{$_POST['email']}'";
$resultado = $db->query($sql);
if($resultado->num_rows==0){
    header("location: index.php");
}else{
    $pessoa = $resultado->fetch_assoc();
    if(password_verify($_POST['senha'],$pessoa['senha'])){
        session_start();
        $_SESSION['id'] = $pessoa['id_pessoa'];
        header("location:restrita_lista.php");
    }else{
        header("location: index.php");
    }
}