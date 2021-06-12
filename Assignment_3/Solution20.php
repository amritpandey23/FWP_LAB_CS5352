<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 20 -->
<?php
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo '';
var_dump($x);
