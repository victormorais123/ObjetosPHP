<html>
 <head>
  <title>Aula 2 POO</title>
 </head>
 <body>
 <?php 
 require_once 'caneta.php';
 $c1 = new Caneta;
 $c1-> cor = "Azul";
 $c1-> ponta = "0.5";
 $c1-> destampar();
 print_r($c1);
 echo "<br/>";
  $c2 = new Caneta;
 $c2-> cor = "Vermelho";
 $c2-> ponta = "0.5";
 ?>
 </body>
</html>