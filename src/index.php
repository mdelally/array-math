<?php

require "MDelally/ArrayMath.php";

$array1 = [5,15,1,3,8,7,15];
$array2 = [1,2,4,8,16,32,64,128];
$array3 = [2,4,6,8,10,12,14,16,18];
$sum = 30;

$subsetSums = ArrayMath::subsetSums($array1, $sum);

var_dump($subsetSums);
