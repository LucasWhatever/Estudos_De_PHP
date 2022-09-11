<?php
/* exibir array */
$nomes = array("lucas", "maria", "eduardo");
print_r($nomes);/* print_r exibe o array completo e a posição de cada elemento */
echo '<hr>';
/* exibir array */

/* Contar os elementos de um array */
$nomes[] = "antonio";/* inserindo um novo elemento ao array */
$nomes[] = "beatriz";
print_r($nomes);
$total = count($nomes);/* count conta o total de elemento dentro do array  */
echo '<hr><br>';
echo 'total de elementos: ' . $total . '<br>';
echo '<hr><br>';
/* Contar os elementos de um array */

/* criando loop */
foreach ($nomes as $valor) {
    echo $valor . '<br>'; /* pecorrer o array inteiro e atribui cada dado a variavel valor */
};
echo '<hr><br>';
/* criando loop */



/* Array associativos */

/* exibe o resultado de acordo com o nome está associado o elemento */

$pessoas = array("Nome" => "lucas", "idade" => 22, "altura" => 1.75, "cidade" => "São josé");
$pessoas["profissao"] = "programador";/* adicionando novo elemento ao array */
print_r($pessoas);
echo '<hr>';

/* exibi o array com o indice e dado especifico dessa posição */
foreach ($pessoas as $dados => $valor) {
    echo $dados . ':' . $valor . '<br>';
}

/* Array associativos */



/* Array multidimensionais */

/* Array multidimensional */
$grupos = array(
    "estudantes" => array("lider" => "lucas", "vice-lider" => "maria", "subordinada" => "carla"),
    "professores" => array("lider" => "paulo", "vice-lider" => "matheus", "subordinada" => "isabela"),
    "funcionarios" => array("lider" => "antonio", "vice-lider" => "daniel", "subordinado" => "fabricio"),
);
/* Array multidimensional */
echo '<hr><br>';
/* forma associativa */
echo '<br>' . $grupos["estudantes"]["lider"] . ' / ' . $grupos["estudantes"]["vice-lider"] . ' / ' . $grupos["estudantes"]["subordinada"];

echo '<br>' . $grupos["professores"]["lider"] . ' / ' . $grupos["professores"]["vice-lider"] . ' / ' . $grupos["professores"]["subordinada"];

echo '<br>' . $grupos["funcionarios"]["lider"] . ' / ' . $grupos["funcionarios"]["vice-lider"] . ' / ' . $grupos["funcionarios"]["subordinado"];
/* forma associativa */
echo '<hr><br>';

/* forma de loop */
foreach ($grupos["estudantes"] as $indice => $valor) {
    echo $indice . ':' . $valor . "<br>";
}

echo '<hr><br>';
foreach ($grupos["professores"] as $indice => $valor) {
    echo $indice . ':' . $valor . "<br>";
}

echo '<hr><br>';
foreach ($grupos["funcionarios"] as $indice => $valor) {
    echo $indice . ':' . $valor . "<br>";
}
/* forma de loop */

/* Array multidimensionais */