<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action='teste-5.php' method="get">
  Temperatura em Farenheit : <input type="text" name="F"><br>
  <input type="submit">
 </form>
 <?php 
  $F = $_GET['F'];
  $C = ($F-32)*5/9;  
    
  echo "Em Celsius: $C";
 ?>
 </body>
</html>