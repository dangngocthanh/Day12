<?php
function bubbleSort($list)
{
    while (true) {
        $count = 0;
        for ($i = 0; $i < count($list) - 1; $i++) {
            if ($list[$i] > $list[$i + 1]) {
                $ior = $list[$i];
                $list[$i] = $list[$i + 1];
                $list[$i + 1] = $ior;
                $count++;
            }
        }
        if ($count == 0) {
            return $list;
            break;
        }
    }
}

$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
var_dump(bubbleSort($arr));
