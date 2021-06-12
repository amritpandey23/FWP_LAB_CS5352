<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 15 -->
<?php
$fileName = basename("_string.php");
$fileLastTouched = filemtime($fileName); 
echo "Last modified " . date("l, dS F, Y, h:ia", $fileLastTouched)."
";
?>
