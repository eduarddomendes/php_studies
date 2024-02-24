<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action='teste-4.php' method="get">
  Temperatura em Celsius: <input type="text" name="C"><br>
  <input type="submit">
 </form>
 
 <?php 
  $C = $_GET['C'];
  $F = (9/5)*$C + 32;  
    
  echo "Em Farenheit: $F <br /><br />";
 ?>

 </body>
</html>