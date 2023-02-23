<?php

# while contagens com detalhes
$i = 0;
while ($i < 10) {
    echo "executou $i <br> ";
    $i = $i +1;
}

# for contagens simples
for ($j = 1; $j <= 10; $j++){
      echo "contagem $j <br>";
}

# foreach para percorrer arrays
$arr = [2, 3, 4, 5, 6];

foreach ($arr as $key => $value) {
    echo "Valor {$value} <br>";
}
# foreach para percorrer arrays associativo
$lista = ["Moveis", "Decoracao"];
$lista = [
    "Moveis" => [
        "nome" => "mesa",
        "detalhe" => "vidro com pé de ferro",
        "preco" => 500
    ],
    "Decoracao" => [
        "local" => "Quarto meninos",
        "objeto" => "coracoes rosas",
        "preco" => 16
    ]
];
foreach ($lista["Moveis"] as $key => $value) {
    echo " {$value} <br>";
}
echo "<br>";
$n = 2;

for ($i =1; $i <= 10; $i ++){
    echo "{$n} x {$i} = ". $n*$i ."<br>";
}
