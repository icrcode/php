<?php

$nome = readline('Entre com o seu nome: ');

echo 'Olá ' . $nome;
// 1. Exibir conteúdo: echo e print
// Ambos são usados para exibir conteúdo na tela, mas 'echo' é levemente mais rápido.

echo "<h2>Exemplo de Echo</h2>";
print "<p>Exemplo de Print</p>";

// 2. Variáveis
// Em PHP, as variáveis começam com o símbolo $.

$nome = "João";
$idade = 25;

echo "<p>Nome: $nome, Idade: $idade anos</p>";

// 3. Condicionais: if, else, elseif
// São usadas para executar blocos de código baseados em condições.

$nota = 8;

if ($nota >= 7) {
    echo "<p>Passou na prova!</p>";
} else {
    echo "<p>Não passou na prova!</p>";
}

// 4. Laços: for, while, foreach
// São usados para repetir um bloco de código múltiplas vezes.

echo "<h2>Laço for</h2>";
for ($i = 1; $i < = 5; $i++) {
    echo "<p>Contagem: $i</p>";
}

echo "<h2>Laço while</h2>";
$j = 1;

while ($j <= 3) {
    echo "<p>While: Iteração $j</p>";
    $j++;
}

// 5. Arrays
// Arrays armazenam múltiplos valores em uma única variável.

$frutas = array("Maçã", "Banana", "Laranja");
echo "<h2>Array Simples</h2>";
echo "<p>Fruta: " . $frutas[1] . "</p>"; // Exibe 'Banana'

// 6. Funções
// Funções permitem criar blocos de código reutilizáveis.

function saudacao($nome) {
    return "Olá, $nome!";
}

echo "<p>" . saudacao("Carlos") . "</p>";

// 7. Superglobais: $_GET, $_POST, $_SERVER
// Variáveis superglobais fornecem informações sobre o ambiente e inputs do usuário.

echo "<h2>Superglobal \$_SERVER</h2>";
echo "<p>O nome do arquivo atual é: " . $_SERVER['PHP_SELF'] . "</p>";
