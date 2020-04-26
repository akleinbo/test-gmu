<?php

# THE PROBLEM
# We want to know the number of prime numbers between L and R, including L and R, that can be represented as the sum of two consecutive prime numbers + 1.
# YOUR TASK
# Write a program that reads both L and R from input and outputs the number of prime numbers that confrom to the rules stated in The Problem.

function findPrimeNumbersCount($start = 0, $end = 100)
{
    $primeNumbers = [];
    $primeNumberCombinationsFound = 0;

    # loop through given range
    for ($i = $start; $i <= $end; $i++) {

        # check if number is prime number
        if(gmp_prob_prime($i, 0)) {

            # get previous stored prime number and calculation
            $check = ((end($primeNumbers) + $i) + 1);

            # check if previous number is available
            if (!empty($primeNumbers)) {

                # check if number calculated is prime number and is between the given range
                if(gmp_prob_prime($check, 0) && ($start <= $check) && ($check <= $end)) {
                    $primeNumberCombinationsFound++;
                }
            }

            $primeNumbers[] = $i;
        }
    }

    return $primeNumberCombinationsFound;
}

echo 'Input 1 to 10: ' . findPrimeNumbersCount(1, 10) . '<br>';
echo 'Input 1 to 20: ' . findPrimeNumbersCount(1, 20);
