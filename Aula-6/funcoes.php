<?php
    // // declarando uma função

    // function nome_da_funcao (arg01, arg02) {
    //     #corpo da funçao
    //     return $retorno;
    // }

    // function  oi_isadora(){
    //     echo 'Oi Isadora!'."<br>"."<br>";
    // }

    // oi_isadora();


    function oi_pessoal($nome){

            echo "Oi ".$nome."<br>";
    }
    oi_pessoal("Eduardo");

    $familia = array ("Gabriela, Elizio, Eduardo");

    echo "Família <br>";
    foreach($familia as $family){
        oi_pessoal($family);
    }
    
    function multiplicacao($num1, $num2){
        return $num1 * $num2;
    }

    echo multiplicacao(3,4)."<br>";

    for($cont = 0; $cont <= 10; $cont++){
    echo "5 x ".$cont."=".multiplicacao(5, $cont)."<br>";
    }


        
        $valores = array (1, 2, 3, 4, 5);
        function somaValoresArray($arrayDeNumeros){
            $soma = 0;
            
            for($cont = 0; $cont <= 4; $cont++){
                $soma = $soma + $arrayDeNumeros[$cont];
            }
            return $soma;
        }
        echo somaValoresArray($valores);
?>
