<?php

$texto1 = "treinamento";
$texto2 = "php";
$arrays = ["Python", "Php", "Java"];

$concatena1 = "faça um $texto1 de $texto2 na escola de programação";
$string = 'faça um $texto1 de $texto2 na escola de programação';
$concatena2 = "faça um $texto1 de {$arrays[2]} na escola de programação";

echo $concatena1;
echo "<br>";
echo $string;   
echo "<br>";
echo $concatena2;

