<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 23 -->
<?php
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

function printArr($arr) {
    foreach ($arr as $key => $val) {
        echo $key . " : " . $val . "<br>";
    }
}

echo "<b>a) Ascending order sort by Value</b><br>";
asort($arr);
printArr($arr);
echo "<br>";
echo "<b>b) Ascending order sort by Key</b><br>";
ksort($arr);
printArr($arr);
echo "<br>";
echo "<b>c) Descending order sorting by Value</b><br>";
arsort($arr);
printArr($arr);
echo "<br>";
echo "<b>d) Descending order sorting by Key</b><br>";
krsort($arr);
printArr($arr);
