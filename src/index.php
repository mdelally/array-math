<?php

require "MDelally/ArrayMath.php";

$sets = [
    [5,15,1,3,8,7,15],
    [1,2,4,8,16,32,64,128],
    [2,4,6,8,10,12,14,16,18]
];

$sum = 30;
$results = [];

foreach ($sets as $set) {
    $subsetSums = MDelally\ArrayMath::subsetSums($set, $sum);
    array_push($results, $subsetSums);
}

var_dump($results);
