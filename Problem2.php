<?php

$arr = array(array(141,151,161), 2, 3, array(101, 202, array(303,404)));

# YOUR TASK
# Write a function function MaxArray($arr) which returns the maximum value contained in $arr or some array nested within $arr.
# In the example above, the returned value should be 404.

function recursiveFunction($array, $result = [])
{
    foreach ($array as $item) {
        if (is_array($item)) {
            $result = recursiveFunction($item, $result);
        } else {
            $result[] = $item;
        }
    }

    return $result;
}

function MaxArray($arr)
{
    $arr = recursiveFunction($arr);
    $arr = max($arr);

    return $arr;
}

echo MaxArray($arr);
