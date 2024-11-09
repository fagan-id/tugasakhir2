<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Backland</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="assets/img/design logo-cafe.png" />

  <!-- Extras -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- Main CSS Files -->
  <link href="assets/css/login.css" rel="stylesheet">

</head>

<body>
  <section class="forms-section">
    <img class="title-img" src="assets/img/design logo-cafe.png" alt="">
    <div class="forms">

      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>

        <!-- Login -->
        <form action="connection-login.php" method="POST" class="form form-login">
          <fieldset>
            <legend>Please, enter your email and Password for login.</legend>
            <div class="input-block">
              <label for="login-username">Username</label>
              <input id="login-username" name="login-username" type="username" required>
            </div>
            <div class="input-block">
              <label for="login-password">Password</label>
              <input id="login-password" name="login-password" type="password" required>
            </div>
            <div class="input-block">
              <label for="login-review">Review</label>
              <input id="login-review" name="login-review" type="text" required>
            </div>
            <div class="input-block">
              <label for="login-rating">Rating</label>
              <input id="login-rating" name="login-rating" type="number" min="1" max="5" required>
            </div>
          </fieldset>
          <button type="submit" name="submit" class="btn-login">Submit</button>
        </form>
      </div>

      <!-- Registration -->
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <form action="connection-signup.php" method="POST" class="form form-signup">
          <fieldset>
            <legend>Please, enter your email, username and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup-username">Username</label>
              <input id="signup-username" name="signup-username" type="username" required>
            </div>
            <div class="input-block">
              <label for="signup-password">Password</label>
              <input id="signup-password" name="signup-password" type="password" required>
            </div>
            <div class="input-block">
              <label for="signup-number">Number</label>
              <input id="signup-number" name="signup-number" type="tel" pattern="^\+62[0-9]{9,11}$" 
              placeholder="+628123456789" required >
            </div>
            <div class="input-block">
              <label for="signup-email">E-mail</label>
              <input id="signup-email" name="signup-email" type="email" required>
            </div>
          </fieldset>
          <button type="submit" name="submit" class="btn-signup">Continue</button>
        </form>
      </div>
    </div>
    <br><br><p>Sign Up First Before Reviewing Our Site!</p>
  </section>
  <script>
    const switchers = [...document.querySelectorAll('.switcher')]

    switchers.forEach(item => {
      item.addEventListener('click', function () {
        switchers.forEach(item => item.parentElement.classList.remove('is-active'))
        this.parentElement.classList.add('is-active')
      })
    })
  </script>
</body>

</html>