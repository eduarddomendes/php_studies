<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $op1 = $_GET["operando-1"];
    $op2 = $_GET["operando-2"];
    $operador = $_GET["operador"];
    $resultado = null;

    switch ($operador) {
        case '+':
            echo $resultado = $op1 + $op2;
            break;

        case '-':
            echo $resultado = $op1 - $op2;
            break;

        case '*':
            echo $resultado = $op1 * $op2;
            break;

        case '/':
            echo $resultado = $op1 / $op2;
            break;

        // default:
        //     echo 'Operação Inválida';
        //     break;
    }
    ?>
</body>

</html>