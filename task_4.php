<?php
function printFibonacci($n)
{
    $a = 0;
    $b = 1;
    echo $a . "\n";

    for ($i = 1; $i < $n; $i++) {
        $c = $a + $b;
        echo $c . "\n";
        $a = $b;
        $b = $c;
    }
    echo "\n";
}

printFibonacci(15);
