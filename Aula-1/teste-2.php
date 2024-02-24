<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action='teste-2.php' method="get">
  Numero 1: <input type="text" name="num"><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pegando o valor digitado
  // pelo usuário
  $raio = $_GET['num'];
  
  // Imprime o raio
  echo "Raio: $raio<br />";
  
  // Exibe perímetro
  echo "Perímetro: ", 2*M_PI*$raio, "<br />";
  
  // Exibe Área
  echo "Área: ", M_PI*$raio*$raio, "<br />";
 ?>
 </body>
</html>