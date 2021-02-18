<?php
function getNum($max)
{
    while(true){
        $cur = 1;
        $prev = 0;

        for ($i = 0; $i < $max; $i++) {
            yield $cur;

            $temp = $cur;
            $cur = $prev + $cur;
            $prev = $temp;
        }
    }
    
}

$data = getNum(5);

for ($i = 0; $i < 10; ++$i) { 
    print $data->current() . PHP_EOL;
    $data->next(); 
}

foreach(getNum(5) as $val) print $val.PHP_EOL; 
