<?php
header('Content-Type: text/html; charset=utf-8');

echo 'For Crescente<br>';
for ($i = 0; $i < 10; $i++){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';

echo 'For Decrescente<br>';
for ($i = 10; $i > 0; $i--){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';

echo 'While Crescente <br>';
$i = 0;
while ( $i < 10){
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}

echo '<br><hr><br>';

echo 'While Descrescente<br>';
$i = 10;
while ( $i > 0){
    echo 'i é igual a ' . $i . '<br>';
    $i--;
}

echo '<br><hr><br>';

echo 'Do While crescente<br>';
$i = 0;
do{
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while( $i < 10);

echo '<br><hr><br>';

echo 'Do While decrescente<br>';
$i = 10;
do{
    echo 'i é igual a ' . $i . '<br>';
    $i--;
}while( $i > 0);

echo '<br><hr><br>';

echo 'While<br>';
$i = 10;
while ( $i < 10){
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}

echo '<br><hr><br>';

echo 'Do While<br>';
$i = 10;
do{
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while( $i < 10);

echo '<br><hr><br>';