<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        h3 {
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Cálculo da Média</h2>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" required><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" required><br>
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" id="valor3" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['nome'];
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

       
        $media = ($valor1 + $valor2 + $valor3) / 3;

        
        $resultado = $media >= 7 ? "acima do esperado" : "abaixo do esperado";

        
        echo "<h3>Nome: $nome</h3>";
        echo "<h3>Média: " . number_format($media, 2) . "</h3>";
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
