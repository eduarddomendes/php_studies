<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <?php
        
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        
        $imc = $peso/($altura * $altura);

        echo "<p> Seu IMC é: ".$imc; "<br>";

        if ($imc < 18.5){
            echo "<p>Você está abaixo do peso!";
        } elseif ($imc < 25){ 
            echo "<p> Você está com o peso normal!";
        } else {
            echo "<p> Você está acima do peso!";
        }
        ?>
    </body>
</html>