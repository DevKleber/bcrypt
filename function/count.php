<?php

$linha = file('contados.txt');
$visitas = $linha[0];
++$visitas;
$cf = fopen('contados.txt', 'w');
fputs($cf, "{$visitas}");
fclose($cf);
// echo "$visitas visitas";
