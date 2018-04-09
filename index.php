<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form method="post" action="calculo.php">
            <input type="number" step="0.001" name="v1"><br>
            <input type="number" step="0.001" name="v2"><br>
            <select name="opr">
                <option value = 'somar'>Somar</option>
                <option value = 'subtrair'>Subtrair</option>
                <option value = 'multiplicar'>Multiplicar</option>
                <option value = 'dividir'>Dividir</option>
            </select>
            <br> <input type="submit" value="Calcular">
        </form>
    </body>
</html>