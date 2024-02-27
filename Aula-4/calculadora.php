<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>

    <form action="calculadoraServer.php" method="get">
    <label for="operando-1">Num1:</label> 
    <input type="text" name="operando-1"><br> <br>
    <label for="operando-2">Num2:</label>
    <input type="text" name= "operando-2"><br> <br>
    <!-- <label for="operador">Op:</label>
    <input type="text" name="operador"> <br> <br><br> <br> -->
    <select name="operador">
        <option value="+">Soma</option>
        <option value="-">Subtração</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
    </select>

    <button type="submit">Enviar</button>
    </form>
</body>
</html>