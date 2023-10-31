<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1> Arrays (vetores e matrizes)</h1>
    <hr>
 
    <h2>Arrays numéricos/indexados</h2>
 
    <?php
   
    // Declarando arrays usando [] e função array()
 
    $jogadores = ["Cristiano Ronaldo", "Messi", "Vini JR"];
    $palmeiras = array("Rapahel Veiga", "Endrick", "Dudu", "Rony");
 
 
    // Declarando como constante
    define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
    const UNIDADES_SENAC = ["Penha", "Tatuapé", "São Miguel", "Itaquera"];
    ?>
 
 
<h3>Saída de dados de Arrays</h3>
<ul>
    <li>Jogador que mais gosto: <?=$jogadores[0]?></li>
    <li>Jogador do Palmeiras que mais gosto: <?=$palmeiras[2]?></li>
 
    <!-- Mini - exercícios
    -  mostre em que unidade do senac estamos
    -  Mostre o sesc que fica no litoral -->
 
    <li>SENAC: <?=UNIDADES_SENAC[0]?></li>
    <li>SESC:<?=UNIDADES_SESC[1]?></li>
</ul>
 
 
 
 
<h2>Array associativo</h2>
 
<?php
 
$livro = [
    "titulo" => "Senhor dos anéis",
    "autor" => "J.R.R. Tolkien",
    "ano" => 1954,
    "personagens" => "Frodo", "Legolas"
];
 
$filmes = array(
    "titulo" => "Velozes e Furioso",
    "genero" => "Ação"
);
?>
 
 
<h3> Saída de dados (array associativo)</h3>
 
<p>Livro: <?=$livro["titulo"]?></p>
<p>O cara mais incrivel de todos os filmes: <?=$livro["personagens"][1]?></p>
<hr>
 
 
<h3>Comandos para analisar a estrura de array: print_r() e var_dump()</h3>
 
<?=print_r($palmeiras)?>
<br><br>
<?=var_dump($palmeiras)?>
 
 
<!-- Saídas com formatação usando a tag <pre> -->
    <pre> <?=print_r($jogadores)?></pre>
    <pre> <?=var_dump($jogadores)?></pre>
 
 
    <pre>
        <?=var_dump($livro)?>
    </pre>
</body>
</html>
<p>O nome da pessoa é <i><?=$pessoa?></i> e... por ARTHUR AUGUSTO TEIXEIRA ARRUDA
ARTHUR AUGUSTO TEIXEIRA ARRUDA
15:52
<p>O nome da pessoa é <i><?=$pessoa?></i> e tem <b><?=IDADE?></b></p>
tem menu de contexto