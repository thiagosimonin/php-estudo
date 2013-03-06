<?php
header('Content-Type: text/html; charset=utf-8');
$var1 = 10;
$var2 = 20;
$var3 = 30;

// adição
echo 'Adição =' . "\n";
echo $var1 + $var2;
echo '<br>';

// subtração
echo 'Subtração =' . "\n";
echo $var1 - $var2;
echo '<br>';

// produto
echo 'Multiplicação =' . "\n";
echo $var1 * $var2;
echo '<br>';

// divisão
echo 'Divisão =' . "\n";
echo $var1 / $var2;
echo '<br>';

// módulo (resto da divisão)
echo 'Módulo =' . "\n";
echo $var1 % 3;
echo '<br>';
echo 'Módulo =' . "\n";
echo $var2 % 3;
echo '<br>';
echo 'Módulo =' . "\n";
echo $var3 % 3;
echo '<br>';

// Ordem das Operações
echo 'Operação com ()';
echo '<br>';
echo $var1 + $var2 * $var3;
echo '<br>';
Echo ($var1 + $var2) * $var3;
echo '<br>';

echo 'Incremento e Decremento';
echo '<br>';
$var1 = $var1 +1;
$var1++;$var1++;$var1++;$var1++;$var1--;$var1--;
echo $var1;
echo '<br>';

//$var2 = $var2 + 10;
$var2 += 10; // modo _ elegante que o de cima
echo $var2;
echo '<br>';

$aviso = '';
$aviso = $aviso . 'A minha mensagem de aviso' . "<br>";
echo '<br>';
$aviso .= 'A minha mensagem de aviso';
echo '<br>';
echo $aviso;
echo '<br>';