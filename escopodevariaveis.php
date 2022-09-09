<!-- escopo de variaveis -->

<?php
/* variaveis globais */

$nome = "lucas"; /* variavel fora do metodo */
$valor1 = 50;
$valor2 = 20;
$valor3 = 20;

function exibirnome()
{
    global $nome; /* declaração de variavel */
    echo "$nome <br>";
}

exibirnome();

/* variaveis locais */

function exibirnome2()
{
    $nome = 'teste';
    echo "$nome <br>";
}

exibirnome2();

/* variavies globais array */
function somando()
{
   $valordotodo = $GLOBALS['valor1'] + $GLOBALS['valor2'] + $GLOBALS['valor3'];
    
   echo "valor da soma é: ".$valordotodo;
}

somando();
