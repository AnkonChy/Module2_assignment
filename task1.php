
<?php

echo "Even number between 1 to 20 using For loop: ";

function evenNumberFor($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

evenNumberFor(2, 20, 2);

echo "<br>";

echo "Even number between 1 to 20 using While loop: ";

function evenNumberWhile($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

evenNumberWhile(2, 20, 2);


echo "<br>";

echo "Even number between 1 to 20 using Do while loop: ";

function evenNumberDoWhile($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
};


evenNumberDoWhile(2, 20, 2);
