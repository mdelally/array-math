<?php

namespace MDelally;

class ArrayMath {
    /**
     * Given an array of values, find all combinations that total given sum.
     *
     * @param array $nums
     * @param $target
     * @param array $partial
     * @param array $results
     */
    protected static function findSubsetSums(Array $nums, $target, $partial = [], &$results = [])
    {
        $nums = array_unique($nums);
        $sum = array_sum($partial);

        if ($sum == $target) {
            asort($partial);
            $results[] = $partial;
            // print_r($partial);
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

            self::findSubsetSums($remaining, $target, $newPartial, $results);
        }
    }

    /**
     * Given an array of values and a given sum, return an array containing all
     * combinations of values totalling given sum.
     *
     * @param array $nums
     * @param $sum
     * @return array
     */
    public static function subsetSums(Array $nums, $sum) {
        $results = [];

        self::findSubsetSums($nums, $sum, [], $results);

        return $results;
    }
}

$array1 = [5,15,1,3,8,7,15];
$array2 = [1,2,4,8,16,32,64,128];
$array3 = [2,4,6,8,10,12,14,16,18];
$sum = 30;

$subsetSums = ArrayMath::subsetSums($array1, $sum);

var_dump($subsetSums);
