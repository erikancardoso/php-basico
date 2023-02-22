<?php 

# if else
$a = 30;
$b = 10;

if( $a > $b){
    echo "A maior que B";
}

if($a == $b){
    echo "A é maior que B";
}else{
    echo "A não é maior que B";
}

# switch case
$c = 0;
switch ($c) {

    case '1': echo "falso";
        break;
    case '0': echo "verdadeiro";
        break;
    default: echo "erro";
        break;
}

echo "<br>";


$n = 2;

if ($n%2 == 0){
    if($n < 10){
    echo "Não é estranho";
   } elseif ($n > 20){
    echo "Não é estranho";
   } elseif ($n > 10 &&  $n < 20) {
    echo "Estranho";
   } 
} else {
    echo "Estranho";
}  