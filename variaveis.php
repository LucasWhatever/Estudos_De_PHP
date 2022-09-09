<?php
/* variaveis escalares */

/* string */
$nome = "lucas";
var_dump($nome);
if (is_string($nome)) : echo "olá sou uma string e me chamo $nome";
else : echo "Não sou uma string";
endif;
/* int */
echo "<hr>";
$idade = 22;
var_dump($idade);
if (is_int($idade)) :
    $$idade = 60;
    echo "Olá minha idade é $idade e meu nome é $nome";
else : echo "Idade não é int";

endif;
/* float  */
echo "<hr>";
$altura = 1.98;
var_dump($altura);
if (is_float($altura)) :
    echo "Olá minha altura é $altura M e meu nome é $nome";
else : echo "altura não é float";

endif;
/* boolean */
echo "<hr>";
$declaracao = true;
var_dump($declaracao);
if (is_bool($declaracao)) : echo "Olá meu nome é $nome, isso é um boolean";
else : echo "isso não é um boolean ";

endif;

/* variaveis compostas */

/* arrays */

$nomes = array("lucas", "gabriel", "maria", "marcos");
var_dump($nomes);
echo "<hr>";

/* objects */
class Nomeador
{
    public $nome;
    public function nomear($nome)
    {
        $this->$nome = $nome;
    }
}

$escolhido = new Nomeador();
$escolhido->nomear("Carlos");
$escolhido->nomear("Lucas");
var_dump($escolhido);
echo "<hr>";
if (is_object($escolhido)) : echo "Olá meu nome é $nome, isso é um object";
else : echo "isso não é um object";

endif;