<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">
        <?php

        include("php/connect.php");
        if(isset($_POST['submit'])){
          $Id = $_POST['id'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $dateOfBirth = $_POST['dateOfBirth'];
          $gender = $_POST['gender'];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $contactNo = $_POST['contactNo'];
          $paypalId = $_POST['paypalId'];

          //verifying the unique email
          $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
          if (mysqli_num_rows($verify_query) !=0) {
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                      </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
          }
          else{
            mysqli_query($con, "INSERT INTO users(Id, Username, Password, Email, DateOfBirth, Gender, Address, City, ContactNo, PayPalId) VALUES ('$id', '$username', '$password', '$email', '$dateOfBirth', '$gender', '$address', '$city', '$contactNo', '$paypalId')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Registration Successfully!</p>
                      </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
          }
        } else{
        ?>
        <header>FORM REGISTRATION</header>
        <form action="" method="post">
          <div class="field input">
            <label for="username">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              autocomplete="off"
              required
            />
          </div>
          <div class="field input">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              autocomplete="off"
              required
            />
          </div>
          <div class="field input">
            <label for="retype-password">Retype Password</label>
            <input
              type="password"
              name="retype-password"
              id="retype-password"
              autocomplete="off"
              required
            />
          </div>
          <div class="field input">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              autocomplete="off"
              required
            />
          </div>
          <div class="field input">
            <label for="birth">Date of Birth</label>
            <input
              type="date"
              name="birth"
              id="birth"
              autocomplete="off"
              required
            />
          </div>
          <div class="field input">
            <label for="gender">Gender</label>
            <div class="choice-chip">
              <input
                type="radio"
                id="male"
                name="gender"
                value="male"
                required
              />
              <label for="male">Male</label>
              <input
                type="radio"
                id="female"
                name="gender"
                value="female"
                required
              />
              <label for="female">Female</label>
            </div>
          </div>

          <div class="field input">
            <label for="address">Address</label>
            <input
              type="text"
              name="address"
              id="address"
              autocomplete="off"
              required
            />
          </div>

          <div class="field input">
            <label for="city">City</label>
            <select id="city" name="city" required>
              <option value="city1">City 1</option>
              <option value="city2">City 2</option>
              <option value="city3">City 3</option>
              <!-- Tambahkan lebih banyak kota jika diperlukan -->
            </select>
          </div>

          <div class="field input">
            <label for="contact">Nomor HP</label>
            <input
              type="tel"
              name="contact"
              id="contact"
              autocomplete="off"
              required
            />
          </div>

          <div class="field input">
            <label for="paypal">PayPal ID</label>
            <input
              type="text"
              name="paypal"
              id="paypal"
              autocomplete="off"
              required
            />
          </div>

          <div class="field">
            <input
              type="submit"
              class="btn"
              name="submit"
              value="Register"
              required
            />
            <input type="reset" class="btn" value="Clear" />
          </div>
          <div class="links">
            Already have an account?? <a href="index.php">Sign In</a>
          </div>
        </form>
      </div>
      <?php }?>
    </div>
  </body>
</html>
