<?php
require_once "Cliente.class.php";

$cliente1 = new Cliente("Marlon Brando");

$dvd1 = new DVD("O Poderoso Chefão");
$dvd2 = new DVD("O Poderoso Chefão 2");
$dvd3 = new DVD("O Poderoso Chefão 3");

$cliente1->locar($dvd1);
$cliente1->locar($dvd2);
$cliente1->locar($dvd3);

$cliente1->getLocados();