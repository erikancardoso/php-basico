<?php

# operadores aritmeticos 
$soma = 1 + 2;
$subtracao = 5 - 2;
$multiplicacao = 2 * 5;
$divisao = 4 / 2;
$resto = 5 % 2;
$exponenciacao =  10 ** 3;

var_dump($soma);
var_dump($subtracao);
var_dump($multiplicacao);
var_dump($divisao);
var_dump($resto);
var_dump($exponenciacao);

# operadores relacionais

$a = 20;
$b = 10;
var_dump($a == $b); // a igual b
echo "<br>";
var_dump($a > $b); // a maior b
echo "<br>";
var_dump($a < $b); // a menor b
echo "<br>";
var_dump($a != $b); //a diferente b
echo "<br>";
var_dump($a <> $b); //a diferente b
echo "<br>";
var_dump($a <= $b); // a menor ou igual b
echo "<br>";
var_dump($a >= $b); // a maior ou igual b
echo "<br>";
//o php verifica tipos deferentes

$c = 30;
$d = "30";
var_dump( $c == $d); // verifica se os valores sao iguais
echo "<br>";
var_dump( $c === $d); // verfica se os valores e os tipos são iguais
echo "<br>";
var_dump( $c !== $d); // verifica se os tipos são são diferentes
echo "<br>";
# operadores logicos

$e = true;
$f = false;

var_dump($e and $f); // and ou &&
var_dump($e or $f); // or ou ||
var_dump($e xor $f); // xor
var_dump(!$e); // negação
echo "<br>";

# concatenação .

$g = "treinamento";
$h = "php";

$curso = "Faça o ". $g . " de ". $h;
echo $curso;