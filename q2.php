<?php
//calculate sum of positive number from array
$arr=[-1,-50,30,20,100];
$sum=0;

foreach($arr as $data){
    if($data>0){
        $sum += $data;
    }
}
echo $sum;