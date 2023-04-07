<?php
//
$temp="30,29,34,25,30,28,29,25,38,40,25,26,28,25,28";

$arr= explode(',',$temp);

$avg=(array_sum($arr))/(count($arr));

print_r($avg);

