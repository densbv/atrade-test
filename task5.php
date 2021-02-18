<?php

$text = <<<STRT
Текущая дата: {DATE} 
Текущий timestamp: {TIMESTAMP}
STRT;

$time = time();
$date = date("d.m.Y");

$trans = ['{DATE}' => $date, '{TIMESTAMP}' => $time];
$text = strtr($text, $trans);

//$patterns = ['/{DATE}/', '/{TIMESTAMP}/'];
//$replacements = [$date, $time];
//
//$text = preg_replace($patterns, $replacements, $text);


print $text;