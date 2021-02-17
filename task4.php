<?php

function fib($line) {
    $f = [];
    for ($i = 0; $i < $line; $i++) {
        if ($i <= 1) {
            $f[$i] = $i;
            //echo $f[$i] . ' ';
        }
        if ($i > 1) {
            $f[$i] = $f[$i - 1] + $f[$i - 2];
            //echo $f[$i] . ' ';
        }
    }
    return $obj = (object) $f;
}

$data = getNum(5);

for ($i = 0; $i < 10; ++$i) {

    print $data->current() . PHP_EOL;

    $data->next();
}
