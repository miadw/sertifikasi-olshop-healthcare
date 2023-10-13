<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">
        <?php
        include("php/connect.php");
        if(isset($_POST['submit'])){
          $email = mysqli_real_escape_string($con, $_POST['$email']);
          $password = mysqli_real_escape_string($con, $_POST['$password']);

          $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
          $row = mysqli_fetch_assoc($result);

          if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['id'] = $row['Id'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['dateOfBirth'] = $row['DateOfBirth'];
            $_SESSION['gender'] = $row['Gender'];
            $_SESSION['address'] = $row['Address'];
            $_SESSION['city'] = $row['City'];
            $_SESSION['contactNo'] = $row['ContactNo'];
            $_SESSION['paypalId'] = $row['PaypalId'];
          } else{
            echo "<div class='message'>
                      <p>Username or Password is incorrect</p>
                      </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
          }
          if(isset($_SESSION['valid'])){
            header("Location: home.php");
          }
        } else{


        ?>
        <div class="header">
          <div class="logo">
            <p><a href="home.php">Logo</a></p>
          </div>
          <div class="welcome-text">Selamat datang di Toko Alat Kesehatan</div>
        </div>
        <form action="" method="post">
          <div class="field input">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" required />
          </div>
          <div class="field input">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="field">
            <input
              type="submit"
              class="btn"
              name="submit"
              value="Login"
              required
            />
          </div>
          <div class="links">
            Don't have account? <a href="register.php">Sign Up</a>
          </div>
        </form>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
