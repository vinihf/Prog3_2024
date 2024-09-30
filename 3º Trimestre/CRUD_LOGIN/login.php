<?php
if(!isset($_POST['botao'])){
    header("location: index.php");
}

$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$senha = htmlspecialchars($_POST['senha']);

$db = new mysqli("localhost","root","","colecao_livros");

$stmt = $db->prepare("select * from pessoas where email = ?");
$stmt->bind_param("s",$email);

$stmt->execute();

$resultado = $stmt->get_result();

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