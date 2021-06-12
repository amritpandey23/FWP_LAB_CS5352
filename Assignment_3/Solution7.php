<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 7 -->

<?php
$fileName = dirname($_SERVER['PHP_SELF']) . "/" . basename($_SERVER['PHP_SELF']);
echo $fileName . "<br>";
?>