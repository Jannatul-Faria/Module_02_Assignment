<?php
//    Using  for loop
function printevennumbers($start, $end, $step){
   echo "Using for loop: \n";
   for ($i = $start; $i <= $end; $i += $step) {
       echo $i . "\n";
   }
}
printevennumbers(2, 20, 2);

// Using while loop
function printEvenNumbersWhile($start, $end, $step)
{
    echo "Using while loop: \n";
    $i = $start;
    while ($i <= $end) {
        echo "$i \n";
        $i += $step;
    }
    echo "\n";
}

printEvenNumbersWhile(2, 20, 2);

//    Using do-while loop
function printEvenNumbersDoWhile($start, $end, $step)
{
    echo "Using Dowhile loop: \n";
    $i = $start;
    do {
        echo "$i \n";
        $i += $step;
    } while ($i <= $end);
    echo "\n";
}
printEvenNumbersDoWhile(2, 20, 2);
