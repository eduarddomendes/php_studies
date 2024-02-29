<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
</head>

<body>

    <?php
        $contador = 0;
       if ( $_GET["perg-4"] == "amarelo") {
         $contador++;
       }

      
       if ( $_GET["perg-5"] == "azul") {
         $contador++;
       }
       
       if ( $_GET["perg-6"] == "branco") {
         $contador++;
       }
       
       echo "Você acertou: ".$contador." de 3 questões!"
    ?>
  <script>
    function volta(){
      window.open("http://localhost/projetos_php/projetos_php/Aula-5-(Trabalho)/Trabalho.php");
    }
  </script>
    <button onclick="volta()">Voltar</button>
</body>
</html>