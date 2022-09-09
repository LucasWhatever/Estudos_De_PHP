<?php
/* variaveis escalares */
$nome = "lucas";
var_dump($nome);
if (is_string($nome)) : echo "olá sou uma string e me chamo $nome";
else : echo "Não sou uma string";
endif;
echo "<hr>";
$idade = 22;
var_dump($idade);
if (is_int($idade)) :
    $$idade = 60;
    echo "Olá minha idade é $idade e meu nome é $nome";
else : echo "Idade não é int";

endif;

echo "<hr>";
$altura = 1.98;
var_dump($altura);
if (is_float($altura)) :
    echo "Olá minha altura é $altura M e meu nome é $nome";
else : echo "altura não é float";

endif;

echo "<hr>";
$declaracao = true;
var_dump($declaracao);
if (is_bool($declaracao)) : echo "Olá meu nome é $nome, isso é um boolean";
else : echo "isso não é um boolean ";

endif;
