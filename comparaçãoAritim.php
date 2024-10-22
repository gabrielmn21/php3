
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Maioridade</title>
</head>
<body>
    <h2>Verificação de Maioridade</h2>
    <?php
    // Definindo a idade da pessoa e a idade mínima para ser considerada maior de idade
    $idade = 25;
    $maioridade = 18;

    // Operadores aritméticos e de comparação
    // Adicionamos 5 à idade e multiplicamos por 2 e então comparamos se o resultado é maior ou igual à idade mínima de maioridade
    $resultado = ($idade + 5) * 2 >= $maioridade;

    // Exibindo o resultado com base na avaliação da condição
    /* Se o resultado for verdadeiro, a pessoa é considerada maior de idade; caso contrário, é considerada menor de idade*/
    echo $resultado ? "A pessoa é maior de idade." : "A pessoa é menor de idade.";
    ?>
</body>
</html>
