<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <h1>Condicionais</h1>
   <hr>

   <h2>Simples</h2>
   <?php
   $numero = 100;

   if($numero > 20){
    echo "<p>$numero é maior que 20.</p>";
   }
   ?>

   <h2>Composta (if/else)</h2>

   
   <?php


   // Controle de Estoque
   $produto = "Ulytabook Dell";
   $qtdEmEstoque = 0; //o que temos no momento
   $qtdCritica = 2; //minimo necessario
   ?>

   <h3>Produto: <?=$produto?></h3>
   <h4>Estoque: <?=$qtdEmEstoque?></h4>


   <!-- Se a quantidade em estoque for abaixo  da quantidade critica, então o sistema deve avisar e pedir para repor -->
  <?php
   if($qtdEmEstoque < $qtdCritica ){
    echo "<p> É necessario comprar/repor!</p>";

       //Condicional SIMPLES/ANINHADA
       if($qtdEmEstoque ===0){
        echo "URGENTE";
       } 

   } else {
    /* Caso contrario, simplismente mostrar que o estoque esta normal   */
    echo "<p>Estoque normal</p>";
   }
   ?>
</body>
</html>