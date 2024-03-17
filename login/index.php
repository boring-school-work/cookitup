<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CookitUp | Login</title>
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/output.css">
</head>

<body>
  <header class="bg-gradient-to-r from-purple-500 from-30% to-blue-400 flex py-3 px-8">
    <div class="grow">
      <div class="flex">
        <img src="../assets/images/chef-hat.png" alt="chef hat" class="w-10 h-auto object-contain" />
        <a href="../view/home/">
          <img src="../assets/images/CookitUp white.png" alt="cookitup logo" class="w-44 h-auto" />
        </a>
      </div>
    </div>
    <a href="../view/home/" class="flex justify-center items-center gap-x-2">
      <img src="../assets/images/compas.png" class="w-10 object-contain h-auto" />
      <p class="text-white font-semibold">Home</p>
    </a>
  </header>

  <div class="flex justify-center">
    <div class="w-3/4">
      <img class="w-full object-cover h-screen" src="../assets/images/login.jpg" alt="CookitUP" id="login-image">
      <p class="cookitup">CookitUP</p>
    </div>
    <div class="w-1/2 flex flex-col items-center justify-center text-center right">
      <h2 class="text-4xl">Login</h2>
      <p class="text-lg">Sign in to continue</p>
      <br>
      <hr style="width: 80%; border-color: blueviolet;margin-top: 20px;" class="mb-4">
      <br>
      <form id="loginForm" name="loginForm" action="../action/login_user.php" method="POST">
        <?php
        if (isset($_GET['status']) == 'fail') {
          echo "<p style='color:red; font-weight:bold'>incorrect username or password</p>";
        }
        ?>
        <input type="email" name="email" placeholder="Email" id="email" required pattern="^.+?@([A-Za-z]+(\.[A-Za-z]+)+).*[A-Za-z]+$"> <br><br>
        <input type="password" name="password" id="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <button type="submit">Login</button>
      </form>
      <p>Don't have an account? <a class="text-purple-700 font-semibold" href="../register/">Click here to register</a></p>
    </div>
  </div>
</body>

</html>
