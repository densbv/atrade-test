<?php

$text = <<<STRT
Текущая дата: {DATE} 
Текущий timestamp: {TIMESTAMP}
STRT;

$time = time();
$date = date("d.m.Y");

$trans = ['{DATE}' => $date, '{TIMESTAMP}' => $time ];
$text = strtr($text, $trans);

print $text;


