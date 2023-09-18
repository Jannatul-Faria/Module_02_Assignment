<?php
function fibonacci($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

for ($i = 0; $i <= 10; $i++) {
    $fibonacciNumber = fibonacci($i);
    if ($fibonacciNumber > 100) {
        break;
    }
    echo $fibonacciNumber . "\n";
}
