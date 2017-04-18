<?php

$cigarrosDia = 20;
const anosFumando = 4;

$diasFumando = (365 * anosFumando) * ($cigarrosDia * 11);
$minutosFumando = $cigarrosDia * 11;
$horasPerdidas = ($minutosFumando / 60) % 24;


$diasPerdidos = floor($diasFumando /60) / 24;

printf("Perdeu %d dias e %d horas.", $diasPerdidos,$horasPerdidas);