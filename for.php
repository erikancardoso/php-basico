<?php
    $t = intval(rtrim(fgets(STDIN))); //  estudar mais
    for($i = 0; $i < $t; $i++)
    {
        [$a, $b, $n] = array_map('intval', explode(' ', rtrim(fgets(STDIN)))); //obs estudar mais
        
        $result = [];

        for($j = 0; $j < $n; $j++)
        {
            $result[$j] = $a;
            for($k = 0; $k <= $j; $k++)
            {
                $exp = 2 ** $k;
                $result[$j] += $exp * $b;
            }
        }

        for($j = 0; $j < $n; $j++)
        {
            echo $result[$j] . " ";
        }

        echo PHP_EOL;
        
    }