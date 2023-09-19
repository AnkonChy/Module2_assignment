<?php

$first = 0;
$second = 1;
$count = 0;
$fibo = 0;
$limit = 10;

while ($count <= $limit) {
    if ($count <= 1) {
        $fibo = $count;
    } else {
        $fibo = $first + $second;
        $first = $second;
        $second = $fibo;
    }
    echo $fibo . " ";
    if ($fibo > 100) {
        break;
    }
    $count++;
}
