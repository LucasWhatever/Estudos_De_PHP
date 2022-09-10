<!-- constantes-->
<?php
define("NOME", "lucas");/* NOME Indentificador da variavel */
define("IDADE", 22);/* IDADE Indentificador da variavel */
define("ALTURA", 1.75);/* ALTURA Indentificador da variavel */
define("NASCIMENTO", '25/02/2000');/* NASCIMENTO Indentificador da variavel */
define("AFIRMACAO", true);/* AFIRMACAO Indentificador da variavel */
echo 'Olá meu Nome é ' . NOME . ' Tenho ' . IDADE . ' anos ' . 'Tenho ' . ALTURA . ' De altura e Nasci no dia ' . NASCIMENTO;
/* constantes para arrays */
echo '<hr>';
define("DadosPessoais", ["carlos", 34, 1.87, '12/12/1978', false,]);
echo 'Olá meu Nome é ' . DadosPessoais[0] . ' Tenho ' . DadosPessoais[1] . ' anos ' . 'Tenho ' . DadosPessoais[2] . ' De altura e Nasci no dia' . DadosPessoais[3] . '<br>';

/* OBS: variaveis contantes são consideradas como variaveis GLOBAIS, exemplo abaixo */

/* variavel local */
function exibirDado1()
{
    $nome = 'matheus';
    echo $nome;
}

/* variavel global */
function exibirDado2()
{
    echo '<br>'.NOME;
}
exibirDado1();
exibirDado2();
