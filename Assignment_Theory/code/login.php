<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location:home.php");
  die();
}

// database information
$host = "localhost";
$dbpass = "poop";
$dbuser = "root";
$dbname = "mysite";
$port = 3306;

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname, $port);

if ($conn) {
  if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM users WHERE  username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {

      if (mysqli_num_rows($result) >= 1) {
        $_SESSION['message'] = "You are now Loggged In";
        $_SESSION['username'] = $username;
        header("location:home.php");
      } else {
        $_SESSION['message'] = "Username and Password combiation incorrect";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>login, logout, register</title>
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
      <div class="col-md-6 col-md-offset-2">
        <?php
        if (isset($_SESSION['message'])) {
          echo "<div id='error_msg'>" . $_SESSION['message'] . "</div>";
          unset($_SESSION['message']);
        }
        ?>
        <form method="post" action="login.php">
          <table>
            <tr>
              <td>Username : </td>
              <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <tr>
              <td>Password : </td>
              <td><input type="password" name="password" class="textInput"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="login_btn" class="Log In"></td>
            </tr>

          </table>
        </form>
      </div>

    </main>
  </div>

</body>

</html>