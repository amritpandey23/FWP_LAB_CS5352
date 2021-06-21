<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 9 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution 9</title>
</head>

<body>
    <form name="form" action="" method="get">
        <input type="text" name="txt" id="txt" placeholder="Enter string">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $str =  $_GET['txt'];
        $tokens = explode(" ", $str);
        foreach ($tokens as $arr) {
            echo '<div style="color:red;display: inline;">' . $arr[0];
            for ($i = 1; $i < strlen($arr); $i++) {
                echo '<div style="color:black;display: inline;">' . $arr[$i];
            }
            echo '</div> ';
        }
    }
    ?>
</body>

</html>