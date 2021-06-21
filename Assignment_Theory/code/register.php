<?php
session_start();

// database information
$host = "localhost";
$dbpass = "poop";
$dbuser = "root";
$dbname = "mysite";
$port = 3306;

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname, $port);

if (isset($_POST['register_btn'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
  $query = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $query);
  if ($result) {

    if (mysqli_num_rows($result) > 0) {

      echo '<script language="javascript">';
      echo 'alert("Username already exists")';
      echo '</script>';
    } else {

      if ($password == $password2) {
        $sql = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
        mysqli_query($conn, $sql);
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location:home.php");  
      } else {
        $_SESSION['message'] = "The two password do not match";
      }
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>login logout registration</title>
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
          </ul>

        </div>
      </div>
    </nav>


    <main>

      <div>

        <?php
        if (isset($_SESSION['message'])) {
          echo "<div id='error_msg'>" . $_SESSION['message'] . "</div>";
          unset($_SESSION['message']);
        }
        ?>
        <form method="post" action="register.php">
          <table>
            <tr>
              <td>Username : </td>
              <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <tr>
              <td>Email : </td>
              <td><input type="email" name="email" class="textInput"></td>
            </tr>
            <tr>
              <td>Password : </td>
              <td><input type="password" name="password" class="textInput"></td>
            </tr>
            <tr>
              <td>Password again: </td>
              <td><input type="password" name="password2" class="textInput"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="register_btn" class="Register"></td>
            </tr>
          </table>

        </form>
      </div>

    </main>
  </div>

</body>

</html>