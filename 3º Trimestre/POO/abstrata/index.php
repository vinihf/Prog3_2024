<?php
require_once __DIR__."\src\Classes\Pessoa.php";
require_once __DIR__."\src\Classes\Docente.php";
require_once __DIR__."\src\Classes\Discente.php";

$p1 = new Classes\Docente("Tokyo");
$p2 = new Classes\Discente("Nairóbi");

$p1->atividade();
echo "<br>";
$p2->atividade();

