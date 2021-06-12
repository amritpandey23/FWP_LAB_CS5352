<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 24 -->
<?php

$recorded_temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

sort($recorded_temp);

function average($arr) {
    $sum = 0;
    $len = sizeof($arr);
    for ($i = 0; $i < $len; $i++) {
        $sum += $arr[$i];
    }
    return $sum / $len;
}

echo "<b>Average Temperature: </b>" . average($recorded_temp) . "<br>";

echo "<b>First 7 lowest temperatures: </b>";
for ($i = 0; $i < 7; $i++) {
    echo $recorded_temp[$i] . " ";
}
echo "<br>";
echo "<b>First 7 highest temperatures: </b>";
$i = sizeof($recorded_temp) - 1;
$k = 0;
while ($k < 7) {
    echo $recorded_temp[$i] . " ";
    $k++;
    $i--;
}
