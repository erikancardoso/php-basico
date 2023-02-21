<?php
# criando e atrubuindo valores ao arrays
$linguagens = ["PHP", "JAVA", "C++"];
# por padrão ele cria uma chave que é a posição.
echo $linguagens[0]; # acesso por indice.
echo "<br>";
# criando arrays antigos
$antigos = array("Python", "Javascript", "C#");
echo $antigos[2]; # acesso por indice.
# arrays associativos
$curso = ["fundamentos php", 7.4, 40, true]; #array associativo
echo "<br>";
#criando chave para arrays associativos
$curso = [
    "nome_curso" => "fundamentos php",
    "versao" => 7.4,
    "carga_horaria" => 40,
    "status" => true
];
echo $curso["nome_curso"]; # acesso por chave
echo "<br>";
echo $curso["status"]; #retorna 0 false e 1 para true
echo "<br>";

#arrays multidimencional - acesso por linha[]posicao[]
$numeros = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, [9 , 10]]
];

echo $numeros[2][1]; #linha começa por zero e posição também. será = 8
echo "<br>";
echo $numeros[2][2][1]; # acessando sublinha da matrix

$cursos = [
    "Php" => [
    "nome_curso" => "basico Php",
    "versao" => 7.4,
    "carga_horaria" => 40,
    "status" => true
    ],
    "Java" => [
        "nome_curso" => "basico Java",
        "versao" => 11.7,
        "carga_horaria" => 30,
        "status" => true
    ],
    "C++" => [
    "nome_curso" => "basico C++",
    "versao" => 7.4,
    "carga_horaria" => 20,
    "status" => false
    ],
];

echo $cursos["Java"]["nome_curso"];

#adicionar uma nova informação ao meu array
echo "<br>";
$linguagens[3] = "python";
$linguagens[] = "SQL"; # não preciso definir ficará o elemento, ele já organiza de acordo com a disponibilidade do array.
var_dump($linguagens);
echo "<br>";

$cursos["Php"]["pre_requisito"] = "logica de programação";
var_dump($cursos);

