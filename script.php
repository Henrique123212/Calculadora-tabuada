<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de Matemática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3f3f3f;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            width: calc(100% - 22px);
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .result {
            margin-top: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .result h2 {
            margin-top: 0;
        }

        .result ul {
            list-style: none;
            padding: 0;
        }

        .result li {
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }

        .result li:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <form method="post" action="script.php">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular">
    </form>
    <div class="result">
        <?php
        $numero = $_POST['numero'];
        echo "<h2>Tabuada do $numero:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
        ?>
    </div>
</body>

</html>