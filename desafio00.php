<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>

<body>

    <table border="2">
        <tr>
            <th>Salgadinhos</th>
            <th>Preço Salgadinhos</th>
        </tr>

        <?php
        $salgadinhos = array("cebolitos" => 7.30, "baconzitos" => 8.60, "doritos" => 10.50);
        foreach ($salgadinhos as $nome => $preco) {
            echo "<tr>";
            echo "<td>" . $nome . "</td>" . "<td>" . $preco . "<td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>