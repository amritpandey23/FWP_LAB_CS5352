<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 18 -->
<?php
$colors = array("white", "green", "red");

foreach ($colors as $key => $color) {
    echo $color . ", ";
}
?>

<ul type="circle">
    <?php
        foreach($colors as $key => $color) {
            echo "<li>" . $color . "</li>";
        }
    ?>
</ul>
