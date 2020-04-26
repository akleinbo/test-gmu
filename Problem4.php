<?php

# YOUR TASK
# Write a program that takes a string as input and outputs YES if the string is a true palindrome and NO if it is not.
# You should treat the problem keeping case insensitivity in mind which means that uppercase letters are considered to be equal to lowercase letters.

function palindrome($input)
{
    $input = strtolower($input);
    $input = preg_replace('/[^a-z]/', '', $input);

    $length = round((strlen($input)/2), 0);

    $part1 = substr($input, 0, $length);
    $part2 = substr($input, $length);
    $part2 = strrev($part2);

    if($part1 === $part2) {
        return 'This is a palindrome';
    } else {
        return 'This is NOT a palindrome';
    }
}

echo 'H-%a@nna11h: ' . palindrome('H-%a@nna11h') . '<br>';
echo 'Ot121to: '. palindrome('Ot121to') . '<br>';
echo 'Ha-nn-ah: ' . palindrome('Ha-nn-ah') . '<br>';
echo '%Ot@ter: ' . palindrome('%Ot@ter') . '<br>';
