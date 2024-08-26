<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resolução de Problemas</title>
    <link href="style.css" rel="stylesheet">
    
</head>
<body>

<h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Questão 2
        if (isset($_POST['calcular_area'])) {
            $raio = $_POST['raio'];
            define('PI', 3.141592653589793);
            $area = PI * pow($raio, 2);
            $limite = 50;
            if ($area > $limite) {
                echo 'A área do círculo é maior que ' . $limite . '.<br>';
            } else {
                echo 'A área do círculo é menor ou igual a ' . $limite . '.<br>';
            }
        }

        // Questão 3
        if (isset($_POST['converter_para_fahrenheit'])) {
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius * 9/5) + 32;
            echo $celsius . '°C é igual a ' . $fahrenheit . '°F.<br>';
        }

        if (isset($_POST['converter_para_celsius'])) {
            $fahrenheit = $_POST['fahrenheit'];
            $celsius = ($fahrenheit - 32) * 5/9;
            echo $fahrenheit . '°F é igual a ' . $celsius . '°C.<br>';
        }

        if (isset($_POST['verificar_primo'])) {
            $numero = $_POST['numero_primo'];
            $ehPrimo = true;
            if ($numero <= 1) {
                $ehPrimo = false;
            } else {
                for ($i = 2; $i <= sqrt($numero); $i++) {
                    if ($numero % $i == 0) {
                        $ehPrimo = false;
                        break;
                    }
                }
            }
            echo 'O número ' . $numero . ' ' . ($ehPrimo ? 'é primo' : 'não é primo') . '.<br>';
        }

        if (isset($_POST['verificar_par_impar'])) {
            $numero = $_POST['numero_par_impar'];
            echo 'O número ' . $numero . ' é ' . ($numero % 2 == 0 ? 'par' : 'ímpar') . '.<br>';
        }

        if (isset($_POST['calcular_idade'])) {
            $anoNascimento = $_POST['ano_nascimento'];
            $anoAtual = date('Y');
            $idade = $anoAtual - $anoNascimento;
            echo 'A idade para o ano de nascimento ' . $anoNascimento . ' é ' . $idade . ' anos.<br>';
        }

        if (isset($_POST['converter_minutos'])) {
            $minutos = $_POST['minutos'];
            $horas = floor($minutos / 60);
            $minutosRestantes = $minutos % 60;
            echo $minutos . ' minutos são ' . $horas . ' horas e ' . $minutosRestantes . ' minutos.<br>';
        }

        if (isset($_POST['imprimir_tabuada'])) {
            $numero = $_POST['numero_tabuada'];
            echo 'Tabuada do ' . $numero . ':<br>';
            for ($i = 1; $i <= 10; $i++) {
                echo $numero . ' x ' . $i . ' = ' . ($numero * $i) . '<br>';
            }
        }

        if (isset($_POST['calcular_fatorial'])) {
            $numero = $_POST['numero_fatorial'];
            if ($numero < 0) {
                echo 'Número inválido para fatorial.<br>';
            } else {
                $fatorial = 1;
                for ($i = 1; $i <= $numero; $i++) {
                    $fatorial *= $i;
                }
                echo 'Fatorial de ' . $numero . ' é ' . $fatorial . '.<br>';
            }
        }
    }
    ?>
</h2>


    <h1>Questão 2</h1>
    <form method="post">
        <label for="raio">Insira o raio de um círculo:</label>
        <input type="number" id="raio" name="raio" step="0.01" required>
        <button type="submit" name="calcular_area">Calcular Área</button>
    </form>

    <h1>Questão 3</h1>
    <form method="post">
        <label for="celsius">Temperatura em Celsius:</label>
        <input type="number" id="celsius" name="celsius" step="0.01" required>
        <button type="submit" name="converter_para_fahrenheit">Converter para Fahrenheit</button>
    </form>

    <form method="post">
        <label for="fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="number" id="fahrenheit" name="fahrenheit" step="0.01" required>
        <button type="submit" name="converter_para_celsius">Converter para Celsius</button>
    </form>

    <form method="post">
        <label for="numero_primo">Verificar se um número é primo:</label>
        <input type="number" id="numero_primo" name="numero_primo" required>
        <button type="submit" name="verificar_primo">Verificar</button>
    </form>

    <form method="post">
        <label for="numero_par_impar">Verificar se um número é par ou ímpar:</label>
        <input type="number" id="numero_par_impar" name="numero_par_impar" required>
        <button type="submit" name="verificar_par_impar">Verificar</button>
    </form>

    <form method="post">
        <label for="ano_nascimento">Ano de nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required>
        <button type="submit" name="calcular_idade">Calcular Idade</button>
    </form>

    <form method="post">
        <label for="minutos">Converter minutos em horas e minutos:</label>
        <input type="number" id="minutos" name="minutos" required>
        <button type="submit" name="converter_minutos">Converter</button>
    </form>

    <form method="post">
        <label for="numero_tabuada">Imprimir tabuada de um número:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <button type="submit" name="imprimir_tabuada">Imprimir</button>
    </form>

    <form method="post">
        <label for="numero_fatorial">Calcular fatorial de um número:</label>
        <input type="number" id="numero_fatorial" name="numero_fatorial" required>
        <button type="submit" name="calcular_fatorial">Calcular</button>
    </form>

    
</body>
</html>
