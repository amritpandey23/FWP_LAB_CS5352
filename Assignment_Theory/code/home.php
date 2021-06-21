<?php
session_start();

// database information
$host = "localhost";
$dbpass = "poop";
$dbuser = "root";
$dbname = "mysite";
$port = 3306;

$db = mysqli_connect($host, $dbuser, $dbpass, $dbname, $port);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>login logout register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <h1>Login, Registration, Logout</h1>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav center">
            <li><a href="login.php">login</a></li>
            <li><a href="register.php">register</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>

        </div>
      </div>
    </nav>


    <main class="main-content">
      <div class="col-md-6 col-md-offset-4">
        <?php
        if (isset($_SESSION['message'])) {
          echo "<div id='error_msg'>" . $_SESSION['message'] . "</div>";
          unset($_SESSION['message']);
        }
        ?>
        <h1>Home</h1>
        <div>
          <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
        </div>
        <a href="logout.php">logout</a>
      </div>
    </main>
  </div>

</body>

</html>