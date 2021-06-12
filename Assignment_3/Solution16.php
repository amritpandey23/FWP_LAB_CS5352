<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 16 -->
<?php
$filename = basename("sample.txt"); 
$numOfLines = count(file($filename)); 
echo "<h3>There are $numOfLines lines in $filename</h3>";
?>
