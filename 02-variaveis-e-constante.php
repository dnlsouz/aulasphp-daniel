<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variàveis e Constante</title>

    <style>
        p {font-family: Verdana;}
        .destaque {
            background-color: yellow;
            color: red;
        }
    </style>



</head>
<body>
 <h1>Variáveis e Constantes</h1>
 <hr>
 

<?php
//Variáveis
$curso = " Programador web";
$ano = 2023;
$area = "Back-End";

//Saida Interpolada
echo "<p>Estamos no <span class=\"destaque\">$curso</span>  em $ano</p>";

// não da certo, as variáveis são tratadas como texto
echo '<p>Estamos no $curso em $ano</p>';

//Saida com Concatenacão
echo '<Estamos no '.$curso.' em ' .$ano.'</p>';
echo "<p>Estamos no ".$curso." em ".$ano."</p>";
?>

<hr>
<!-- Forma de saida ABREVIADA/SIMPLIFICADA -->
<p>Estamos no <span class="destaque"><?=$curso?></span> em <?=$ano?> </p>

<hr>

<?php
//Constantes
//antiga
define("AUTOR","Daniel Souza Checca");
const EMPRESA = "ABC Tecnologia";
const ANO_FUNDACAO = 2000;
?>


<!-- Saidas -->

<!-- Atual -->
<p>Autor do site: <?=AUTOR?> </p>
<P>Nome da empresa: <?=EMPRESA?> </P>
<P>Fundada em: <?=ANO_FUNDACAO?> </P>


</body>
</html>