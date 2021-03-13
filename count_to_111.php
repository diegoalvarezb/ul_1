<?php

// define the end of the range
const RANGE_START = 1;
const RANGE_END   = 111;

// define bash color codes
const COLOR_DEFAULT = "\e[39m";
const COLOR_RED     = "\e[31m";
const COLOR_BLUE    = "\e[34m";
const COLOR_PURPLE  = "\e[35m";
const COLOR_GREEN   = "\e[32m";

// intro text
echo 'Counting from ' . RANGE_START . ' to ' . RANGE_END . '...';
echo "\n\n";

// iterate all number from 1 to the end of the range
for ($number = RANGE_START; $number < RANGE_END; $number++) {
    $color = COLOR_DEFAULT;

    // check number divisions and choose the color
    $divisibleByThree = ($number % 3) === 0;
    $divisibleByFive  = ($number % 5) === 0;

    if ($divisibleByThree && $divisibleByFive) {
        $color = COLOR_PURPLE;
    } elseif ($divisibleByThree) {
        $color = COLOR_RED;
    } elseif ($divisibleByFive) {
        $color = COLOR_BLUE;
    }

    // print the number
    echo $color . $number . "\t";
}

// print the last number of the range in green
echo COLOR_GREEN . $number;
echo "\n\n";
