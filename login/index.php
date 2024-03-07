<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CookitUp - Login</title>
  <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
  <div class="container">
    <div class="left">
      <img src="../assets/images/login.jpg" alt="CookitUP">
      <p class="cookitup">CookitUP</p>
    </div>
    <div class="right">
      <h2>Login</h2>
      <p>Sign in to continue</p>
      <br>
      <hr style="width: 80%;
    border-color: blueviolet;
    margin-top: 20px;;"> <br>
      <form id="loginForm" name="loginForm" action="../action/login_user.php" method="POST">
        <?php
        if (isset($_GET['status']) == 'fail') {
          echo "<p style='color:red; font-weight:bold'>incorrect username or password</p>";
        }
        ?>
        <input type="email" name="email" placeholder="Email" id="email" required pattern="^[a-z._\-0-9]*[@][a-z]*.(?:...com)$"> <br><br>
        <input type="password" name="password" id="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <button type="submit">Login</button>
      </form>
      <p>Don't have an account? <a href="../register/">Click here to register</a></p>
    </div>
  </div>
</body>

</html>
