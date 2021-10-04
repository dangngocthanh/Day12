<?php
$arr = [1, 6, 8, 9, 1, 4, 5, 2, 3, -1, -5, 7, 0];
function swap($list, $i, $j)
{
    $swap = $list[$j];
    $list[$j] = $list[$i];
    $list[$i] = $swap;
    return $list;
}

function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        $list = swap($list, $i, $min);
    }
    return $list;
}

var_dump(selectionSort($arr));

