<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("location:index.php");
}
require_once __DIR__."/vendor/autoload.php";
$pessoa = Pessoa::find($_GET['id']);
$pessoa->delete();
header("location:restrita.php");