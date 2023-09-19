<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    } else
        echo $i . "\n";
}
