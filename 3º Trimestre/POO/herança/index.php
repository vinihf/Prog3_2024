<?php
require_once __DIR__."\src\Classes\ContaCorrente.php";
require_once __DIR__."\src\Classes\ContaPoupança.php";
require_once __DIR__."\src\Classes\ContaBancaria.php";

$cc = new \Classes\ContaCorrente(100.00,1000.00);
echo $cc->getSaldo();
echo "<br>";
echo $cc->depositar(100.00);
echo "<br>";
echo $cc->sacar(100.00);

echo "<hr>";

$cp = new \Classes\ContaPoupança(1000.00);
echo $cp->getSaldo();
echo "<br>";
echo $cp->depositar(100.00);
echo "<br>";
echo $cp->sacar(100.00);

?>