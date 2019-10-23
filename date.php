<?php

$rounds = 100000 * 1000000;

$start = microtime(true);

for($i = 0; $i < $rounds;$i++) {
    $date = date('Y');
}

$y = microtime(true) - $start;

$start = microtime(true);

for($i = 0; $i < $rounds;$i++){
    $datetime = (new DateTimeImmutable())->format('Y');
}

$x = microtime(true) - $start;




echo PHP_EOL;

echo $x.PHP_EOL;
echo $y.PHP_EOL;
