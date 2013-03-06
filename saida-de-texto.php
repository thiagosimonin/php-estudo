<?php

header('Content-Type: text/html; charset=utf-8');



$operador = '!!';
$numero = 13;
echo "Olá Mundo" . '!';
echo '<br>';

print "Olá Mundo" . "!";
echo '<br>';

echo 'Olá Mundo' . "!";
echo '<br>';

echo "Olá Mundo" . " " . $numero . $operador;
echo '<br>';

echo 'Olá Mundo' . ' ' . $numero . $operador;
echo '<br>';

echo "Olá Mundo $numero $operador";
echo '<br>';

echo 'Olá Mundo $numero $operador';
echo '<br>';

echo 'Olá Mundo' . $numero . $operador;
echo '<br><pre>';

echo "Olá Mundo \n$numero \n$operador";

echo "\n" . 'Olá Mundo' . "\n" . $numero . "\n" . $operador;  // melhor forma
echo '</pre><br>';

echo '<a href="http://www.thiagosimonin.wordpress.com">blog thiago</a>';
echo '<br>';

echo "<a href=\"http://www.thiagosimonin.wordpress.com\">blog thiago</a>";
echo '<br>';

echo 'E melhor: "usar \'aspas\' simples"';
echo '<br>';