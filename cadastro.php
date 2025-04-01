<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Atividade avaliativa 1</title>
</head>
<body>

<h1>Calculadora de consumo de energia</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')   {
        $dados = $_POST;
        if (!empty($dados['nome']) && !empty($dados['consumo']) && !empty($dados['uso_diario']) && !empty($dados['uso_mensal']) && !empty($dados['valor_kwh'])) {

            $consumo_diario = ($dados['consumo'] / 1000) * $dados['uso_diario'];
            $consumo_mensal = $consumo_diario * $dados['uso_mensal'];
            $custo_mensal = $consumo_mensal * $dados['valor_kwh'];

            echo "<h3>" . $dados['nome'] . "</h3>";
            echo "<ul>";
            echo "<li>Consumo diário: " . $consumo_diario . "  kWh</li>";
            echo "<li>Consumo mensal: " . $consumo_mensal . " kWh</li>";
            echo "<li>Custo mensal: " . $custo_mensal . " reais</li>";
            echo "</ul>";

            if($custo_mensal <= 5)    {
                echo "<h3>Categoria de consumo: Baixa</h3>";
            } else if (($custo_mensal > 5) && ($custo_mensal <= 10))   {
                echo "<h3>Categoria de consumo: Média</h3>";
            } else if ($custo_mensal > 10)   {
                echo "<h3>Categoria de consumo: Elevada</h3>";
            }

        } else  {
            echo "<h3>Preencha todos os campos.</h3>";
        }

    } else  {
        echo "<h3>Nenhum dado enviado.</h3>";
    }
    ?>

    <a href="index.php">Voltar ao início</a>
    
</body>
</html>