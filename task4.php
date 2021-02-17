<?php

function getNum($max) {
    $f = [];
    for ($i = 1; $i < $max + 1; $i++) {
        if ($i === 1) {
            $f[$i] = $i;
        }
        if ($i > 1) {
            $f[$i] = $f[$i - 1] + $f[$i - 2];
        }
    }
    return $obj = (object) $f;
    //var_dump($f);
}

//$data = getNum(5);
//
//for ($i = 0; $i < 10; ++$i) {
//
//    print $data->current() . PHP_EOL;
//
//    $data->next();
//}
//var_dump(getNum(10));
foreach(getNum(6) as $val) print $val.PHP_EOL; 
