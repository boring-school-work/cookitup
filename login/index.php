<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CookitUp - Login</title>
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
</head>

<style> b{margin: 0px;} </style>

<body>
 <!-- Top bar Navigation -->
 <div class="container1" id="topBar">
        <img class="menu-burger" src="../assets/images/chef-hat.png" width="40px"; height="auto";/>
        <img src="../assets/images/CookitUp white.png" width="180px"; height="auto"; style="float: left; margin-top: 1%;" />
        
        <a style="width: 11%; margin-right: 0px; font-size: medium; font-weight: 100;" id="profile-icon"> <img src="../assets/images/profile-user.png" class="navbar-icons" /> Not signed in </a>

        <a style="margin-right: 10px;"> <img src="../assets/images/information.png" class="navbar-icons"/> About </a>

        <!-- <a style="width: 9%;"> <img src="../assets/images/compas.png" class="navbar-icons"/> Explore  </a> -->

        <a class="current"> <img src="../assets/images/compas.png" class="navbar-icons"> Home </a>
    </div>

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
