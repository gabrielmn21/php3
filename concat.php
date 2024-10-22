<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Concatenação em PHP</title>
</head>
<body>
    <h2>Exemplo de Concatenação em PHP</h2>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" required><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Verifica se os dados do formulário foram enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores dos campos do formulário
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        // Concatena os valores para formar o nome completo
        $nome_completo = $nome . " " . $sobrenome;

        // Exibe o nome completo na página
        echo "<p>O nome completo é: $nome_completo</p>";
    }
    ?>

</body>
</html>
