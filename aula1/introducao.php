<?php

$mensagem = 'Olá, mundo!';

echo $mensagem;

echo '<h2>Script do PHP</h2>';

$primeiro_nome = 'Icaro';
$idade = 22;
$feminino = false;
$msculino = true;

$resultado = $idade + 18 * 7;
echo $resultado;
echo '<br/>';

$num = 37.4;
echo 'Ponto flutuante: $num <br/>';

$num2 = (int) $num;
echo 'Inteiro:', $num2;

echo '<br/>';
$nome = readline('Entre com o seu nome: ');


// echo gettype($idade)

//echo $mensagem , ' ' , $primeiro_nome;
// echo $mensagem . ' ' . $primeiro_nome;

?>