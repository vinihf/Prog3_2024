<?php
$x[0] = 15;
$x[3] = 6;
$x[4] = 2;
$x[1] = 5;
ksort($x);
foreach ($x as $v)
 echo $v."<br>";
foreach ($x as $k => $v){
 echo $k." - ".$v."<br>";
}

echo "<hr>";

$multiplo = array("vermelho", "verde", 42 => "azul", "amarelo" =>
array("maçã", 9 => "pera", "banana", "laranja" =>
array("cão", "gato", "iguana")));

echo $multiplo['amarelo']['laranja'][1];

?>





