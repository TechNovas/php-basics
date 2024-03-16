<?php
$sum = 0;
$num;
$nan;
echo "input where you start: ";
$num = (int)readline();
echo "input where you ends: ";
$nan = (int)readline();
for($i=$num; $i<$nan; $i=$i+2){
    echo $sum =+ $i."\n";
}
?>