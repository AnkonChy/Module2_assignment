<?php

function fibonacciSeries($limit)
{
    $first = 0;
    $second = 1;
    $count = 0;
    $fibo = 0;

    for ($i = 0; $i < $limit; $i++) {
        if ($count <= 1) {
            $fibo = $count;
        } else {
            $fibo = $first + $second;
            $first = $second;
            $second = $fibo;
        }
        echo $fibo . " ";
        $count++;
    }
}


fibonacciSeries(15);
