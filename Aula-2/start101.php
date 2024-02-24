<!DOCTYPE html>
<html lang="pt">


<head>
    <title>Controle</title>
</head>
<body>

    <?php
    echo"Foreach<br>";
    $valores = array(30,40,50,60);
    foreach($valores as $valor){ #para cada valor em valores
        echo $valor."<br>";
    }
    echo "For<br>";
    for($i = 0; $i <= 2; $i = $i+1){
        echo $valores[$i]."<br>"; #valores na posição i
    }
    echo "While<br>";
   
   $i = 0;
    while ($i <= 10){
        echo $i. "<br>";
        $i++;
     }

     echo "Do While<br>";
     $i = 0;
     do { 
        echo $i. "<br>";
        $i++;
    } while($i <= 10);


    ?>

</body>
</html>