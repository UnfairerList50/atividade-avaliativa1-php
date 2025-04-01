<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Atividade avaliativa 1</title>
</head>
<body>

<h1>Calculadora de consumo de energia</h1>
<h3>Preencha o formulário abaixo para calcular o consumo de energia do seu aparelho.</h3>

<form action="cadastro.php" method="post">
    <p>
    <label for="nome">Nome do aparelho:</label>
    <input type="text" name="nome" id="nome" required>
    </p>

    <p>
    <label for="consumo">Consumo máximo (W):</label>
    <input type="number" name="consumo" id="consumo" min=0 required>
    </p>

    <p>
    <label for="uso_diario">Horas de uso no dia:</label>
    <input type="number" name="uso_diario" id="uso_diario" min=0 required>
    </p>

    <p>
    <label for="uso_mensal">Dias de uso no mês:</label>
    <input type="number" name="uso_mensal" id="uso_mensal" min=0 required>
    </p>

    <p>
    <label for="valor_kwh">Valor do kWh (R$):</label>
    <input type="number" name="valor_kwh" id="valor_kwh" min=0 required>
    </p>

    <input type="submit" value="Calcular consumo">
</form>
    
</body>
</html>