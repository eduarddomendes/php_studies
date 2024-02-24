<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action=teste-1.php method="get">
  Numero 1: <input type="text" name="num"><br>
  <input type="submit">
 </form>
 
 <?php 
  /* Script que pega um numero
   * e exibe seu quadrado.
   * Auto: PHP Progressivo
  */
  $num = $_GET['num'];
  
  echo "Numero digitado: $num <br />";
  echo "Numero dobrado : ", 2*$num; 
 ?>
 </body>
</html>