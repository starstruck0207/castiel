<?php
$randomNumbers = [121, 211, 212, 444, 432, 11, 21, 32, 23, 34, 65, 8, 4, 1, 9, 5, 7, 3, 2, 6, 0, 10, 11, 14, 12];

function mergeSort($number) {

    if (count($number) > 1) {
        $middle = round(count($number) / 2, 0, PHP_ROUND_HALF_DOWN);  //разделить на две части.
        $left = mergeSort(array_slice($number, 0, $middle));  //возвращает от начало до середины.
        $right = mergeSort(array_slice($number, $middle, count($number)));  //возвращает от середина до конца.
        $counter1 = $counter2 = 0;

        for ($index = 0; $index < count($number); $index++) {
            if ($counter1 == count($left)) {
                $number[$index] = $right[$counter2];
                ++$counter2;

            } elseif (($counter2 == count($right)) || ($left[$counter1] < $right[$counter2])) {
                $number[$index] = $left[$counter1];
                ++$counter1;

            } else {
                $number[$index] = $right[$counter2];
                ++$counter2;
            }
        }
    }

    return $number;
}

print_r(mergeSort($randomNumbers));







