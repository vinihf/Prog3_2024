<?php

require_once "Time.class.php";

$time = new Time("Super Grêmio");
$time->adicionaJogador("Goleiro");
$time->adicionaJogador("Ponta Esquerdo");
$time->adicionaJogador("Zagueiro");

$time->getJogadores();