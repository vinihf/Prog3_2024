<?php
require_once __DIR__."/vendor/autoload.php";
$pessoa = Pessoa::find($_GET['id']);
$pessoa->delete();
header("location:index.php");