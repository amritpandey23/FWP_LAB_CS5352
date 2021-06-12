<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 9 -->

<?php
$str = "PHP Programs";
$lst = explode(" ", $str);
$i = 0;
foreach ($lst as $k => $val) {
    echo "<span style=\"color: red;\">" . $val[$i] . "</span>";
    $i++;
}