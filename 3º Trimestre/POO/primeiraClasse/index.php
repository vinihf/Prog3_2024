<?php
require_once "Cachorro.class.php";

$cachorro1 = new Cachorro("Totó");

echo $cachorro1->getNome();
echo "<br>";
echo $cachorro1->latir();

