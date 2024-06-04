<?php
session_start();
if (isset($_SESSION['error'])) {
  $error = $_SESSION['error'];
} else {
  $error = '';
}
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="js/form.js" defer></script>
  <script src="https://kit.fontawesome.com/132f6e9003.js" crossorigin="anonymous"></script>
</head>

<body>
  <main>
    <div class="container row">
      <div class="col-md-6">
        <h1 class="heading">Log in</h1>
        <form id="loginForm" class="customForm" action="actionPages/signin.php" method="POST"
          onsubmit="return validateLoginForm()">
          <span id="loginFormErrorMsg" class="error-msg">
            <?php echo $error ?>
          </span>
          <input type="text" placeholder="Email" name="email" id="email" />
          <input type="password" placeholder="Password" name="pwd" id="pwd" />
          <input id="submitBtn" type="submit" value="Login" name="loginBtn" />
          <span class="mt-3">Don't have an account? <a class="link" href="signup.php">Signup</a> here</span>
        </form>
      </div>
      <div class="col-md-6">
        <img class="banner-img" src="images/cars/banner.png" alt="banner" />
      </div>
    </div>
  </main>
</body>

</html>