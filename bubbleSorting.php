<?php
$fruits = array("виноград","абрикос","яблоко","груша","орех","апельсин", "ананас", "банан");
$arr = array(9, 8 , 6, 4, 2, 1, 3, 7, 11, 65, 34, 534, 62, 25, 62, 27, 2626, 24, 356);

function bubbleSort($data) {
    for ($index = count($data) - 1; $index >= 0; $index--) {
        for ($size = 0; $size <= ($index - 1); $size++) {
            if ($data[$size] > $data[$size + 1]) {
                $newSize = $data[$size];
                $data[$size] = $data[$size + 1];
                $data[$size + 1] = $newSize;
            }
        }
    }
    return $data;
}

print_r(bubbleSort($arr));

print_r($fruits);

print_r(bubbleSort($fruits));


?>