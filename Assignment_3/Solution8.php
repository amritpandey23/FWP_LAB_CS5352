<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 8 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution 8</title>
</head>

<body>
    <ul>
    <?php
    $url = 'https://www.w3schools.com/php/php_intro.asp';
    $url = parse_url($url);
    echo '<li>Scheme: ' . $url['scheme'] . "<br>";
    echo '<li>Host: ' . $url['host'] . "<br>";
    echo '<li>Path: ' . $url['path'] . "<br>";
    ?>
    </ul>
</body>

</html>