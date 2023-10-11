<?php

declare(strict_types=1);

$array = [1,2,3,4];
$invertedArray = [];
for($i = 0, $x = count($array); $i <= $x; $x--) {
    $invertedArray[] = $array[$x];
};

var_dump( $invertedArray);