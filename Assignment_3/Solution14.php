<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 14 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution 14</title>
    <style>
        body {
            max-width: 1140px;
            margin: 0 auto;
        }
        code {
            font-size: 16px;
        }
    </style>
</head>

<body>

    <?php
    $getData = file('https://www.w3resource.com/');
    foreach ($getData as $ln => $line) {
        echo "<b>{$ln}</b>  " . "<code>" . htmlspecialchars($line) . "</code><br>";
    }
    ?>
</body>

</html>