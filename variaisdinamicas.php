
<!-- variaveis dinamicas -->
<?php 
    $nome = "lucas";
    $idade = 22;
    $altura = 1.75;
    echo "Meu nome é $nome , tenho $idade anos, minha altura é $altura <br>";
    $nome = "marcos";
    $idade = 38;
    $altura = 1.90;
    echo "Meu nome é $nome , tenho $idade anos, minha altura é $altura";
    echo "<hr>";
    /* nome uma varivel e apresenta outro valor */
    $nome = "variavel";
    $$nome = "marcos";
    echo "Meu nome é $variavel , tenho $idade anos, minha altura é $altura";