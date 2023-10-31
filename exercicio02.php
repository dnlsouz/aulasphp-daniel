<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 </title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
 
   
 
    <?php
    $login = [
        "usuario" => "Daniel",
         "senha" => "0000",
         "idade" => 36,
         "cidade" => "São Paulo",
         "telefone" => ["11 96310-2324" , "11 96344-7774"]
    ];
    ?>
 
 
<ol>
    <li>Usuario:<?=$login["usuario"]?></li>
    <li>Idade:<?=$login["idade"]?></li>
    <li>Cidade:<?=$login["cidade"]?></li>
    <li>Telefone:<?=$login["telefone"][0]?></li>
</ol>
 
 
</body>
</html>