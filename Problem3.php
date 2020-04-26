<?php

# YOUR TASK
# Write a program that reads the centre coordinates as well as the radius for each circle,
# determines if they intersect or not and output YES if they do intersect and NO if they don’t intersect.
# The input will be given as follows using one line for each circle:
# x1 y1 r1
# x2 y2 r2
# Where all values are integers, xn, yn are the centre coordinates of circlen and rn is the radius for circlen.

function circle($x1, $y1, $x2, $y2, $r1, $r2) {

    $distSq = ($x1 - $x2) * ($x1 - $x2) + ($y1 - $y2) * ($y1 - $y2);
    $radSumSq = ($r1 + $r2) * ($r1 + $r2);

    if ($distSq == $radSumSq) {
        return "Circle touches each other.";
    } else if ($distSq > $radSumSq) {
        return "No";
    } else {
        return "Yes";
    }
}

# example 1
echo circle(0, 0, 2, 1,0,3);

# example 2
echo circle(0, 0, 1, 4,0,2);
