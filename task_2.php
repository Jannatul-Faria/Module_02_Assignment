<?php
for ($i = 1; $i <= 50; $i++) {
    // If the current number is a multiple of 5, skip to the next iteration.
    if ($i % 5 == 0) {
        continue;
    }

    echo $i . "\n";
}
