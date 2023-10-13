<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Change Profile</title>
  </head>
  <body>
    <div class="nav">
        <div class="logo">
          <p><a href="home.php">Logo</a></p>
        </div>

      <div class="right-links">
        <a href="#">Change Profile</a>
        <a href="logout.php"> <button class="btn">Log Out</button></a>
      </div>
    </div>
    <div class="container">
      <div class="box form-box">
        <header>Change Profile</header>
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
              value="Update"
              required
            />
        </form>
      </div>
    </div>
  </body>
</html>
