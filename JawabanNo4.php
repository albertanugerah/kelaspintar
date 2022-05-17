<?php
$input = [8,6,7,12];

function sorting(array $arr):array {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                [$arr[$j], $arr[$k]] = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
function differentSmallestValue(array $array):void
{
    $value = sorting($array);

    $first = current($value);
    $last = end($value);
    $items = range($first,$last);

    echo current(array_diff($items,$value));

}

differentSmallestValue($input);