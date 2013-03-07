<?php
header('Content-Type: text/html; charset=utf-8');

$var = 'b';

switch ($var) {
    case 1:
    case 'a':
        echo 'Variável com valor 1' . "\n";
        break;
    case 2:
    case 'b':
        echo 'Variável com valor 2' . "\n";
        break;
    case 3:
    case 'c':
        echo 'Variável com valor 3' . "\n";
        break;
    case 4:
    case 'd':
        echo 'Variável com valor 4' . "\n";
        break;
    default:
        echo 'Eu não sei o valor da vairável';
        break;
}