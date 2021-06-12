<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 10 -->

<?php
if (!empty($_SERVER['HTTPS'])) {
    echo 'called from HTTPS';
} else {
    echo 'called from HTTP';
}
echo "<br>";
?>