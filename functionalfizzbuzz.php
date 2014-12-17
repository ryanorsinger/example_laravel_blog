<?php

// Produce FizzBuzz without using loops or iterators.

$numbers = range(1, 100);

$fizzbuzz = function($number)
{
    if ($number % 15 == 0)
        echo "FizzBuzz \n";
    elseif ($number % 5 == 0)
        echo "Buzz \n";
    elseif ($number % 3 == 0)
        echo "Fizz \n";
    else
        echo $number . PHP_EOL;
};

array_map($fizzbuzz, $numbers);
