<?php

$mensagem = 'Olá, mundo!';

echo $mensagem;

echo '<h2> Olá, mundo! </h2>';

$primeiro_nome = 'Ícaro';
$idade = 22;
$gosta_de_bolo = true;

$resultado = $idade + 18 * 7;

echo $resultado;

echo '<br>';

$num = 37.4;

echo $num;

$num2 = (int) $num;

echo '<br>';
echo $num2;

$nota = 8;

if($nota >= 7){
    echo '<p>Passou na Prova</p>';
}else{
    echo '<p>Não passou na Prova</p>';   
};

for($i = 1; $i <= 5; $i++){
    echo '<p> Contagem: '. $i .' </p>';

};

$frutas = array('banana','laranja','sapato','tomate');

echo $frutas[0];

echo '<br>';

function saudacao($nome) {
    return 'Olá '. $nome;

};

echo saudacao('Ícaro');



?>