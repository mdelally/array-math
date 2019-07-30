<?php

class ArrayMath {
    /**
     * Given an array of values, print all combinations of values that
     * total given target, ignoring duplicates.
     *
     * @param array $nums
     * @param $target
     * @param array $partial
     */
    public static function printSubsetSums(Array $nums, $target, $partial = [])
    {
        $nums = array_unique($nums);
        $sum = array_sum($partial);

        if ($sum == $target) {
            asort($partial);
            print_r($partial);
        }

        if ($sum >= $target)
            return;

        for ($i = 0; $i < count($nums); $i++) {
            $remaining = [];
            $n = $nums[$i];

            for ($j = $i + 1; $j < count($nums); $j++) {
                array_push($remaining, $nums[$j]);
            }

            $newPartial = $partial;
            array_push($newPartial, $n);

            self::subsetSums($remaining, $target, $newPartial);
        }
    }
}

$array1 = [5,15,1,3,8,7,15];
$array2 = [1,2,4,8,16,32,64,128];
$array3 = [2,4,6,8,10,12,14,16,18];
$sum = 30;

ArrayMath::printSubsetSums($array1, $sum);
//echo "<br><br>";
