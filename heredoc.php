<?php
header('Content-Type: text/html; charset=utf-8');
$nome = 'Thiago Simonin';


// heredoc basta abrir com <<<ABC e fechar com mesmo nome ABC;


$sigfried = <<<QQC
Exemplo de variável definida pela sintax heredoc<br/>
É possível expandir variáveis: $nome
QQC;

echo $sigfried;