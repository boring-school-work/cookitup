<?php
session_start();

$path = "";
$name = "";

if (isset($_SESSION['username'])) {
  $path = "../../logout/";
  $name = $_SESSION['username'];
} else {
  $path = "../../login/";
  $name = "Not signed in";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" content="width=device-width, initial-scale=1">
  <title>CookitUp</title>
  <link rel="icon" id="Favicon" type="image" href="../../images/chef-hat.png">
  <link rel="stylesheet" href="../../assets/css/stylesheet.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/output.css">
</head>

<body>
  <header class="bg-gradient-to-r from-purple-500 from-30% to-blue-400 flex py-3 px-8">
    <div class="grow">
      <div class="flex">
        <img src="../../assets/images/chef-hat.png" alt="chef hat" class="w-10 h-auto object-contain" />
        <a href="./">
          <img src="../../assets/images/CookitUp white.png" alt="cookitup logo" class="w-44 h-auto" />
        </a>
      </div>
    </div>
    <div class="flex gap-x-5 justify-center items-center text-white font-semibold">
      <a href="./" class="flex justify-center items-center gap-x-2">
        <img src="../../images/compas.png" class="w-10 object-contain h-auto" />
        <p>Home</p>
      </a>
      <?php
      // show create button if user is a creator
      if ($_SESSION['role_id'] == 1 || $_SESSION['role_id'] == 3) {
        echo "<a href='../create/' class='flex justify-center items-center gap-x-1'>
        <img src='../../assets/images/create-icon.svg' alt='profile icon' class='w-10 object-contain h-auto' />
        <p>Create</p>
      </a>";
      }

      // dynamically login or logout button
      echo "
      <a href='$path' class='flex justify-center items-center gap-x-2'>
        <img src=' ../../assets/images/profile-user.png' alt='profile icon' class='w-10 object-contain h-auto' />
        <p>$name</p>
      </a>";
      ?>
    </div>
  </header>

  <div class="featured-tab" id="featuredSection">
    <img src="../../images/Foods/Grilled_Cheese_008-1-c81076b16bc44caea8077666695be94d.jpg" class="featured-img" id="featured-img" />
    <h1>
      <span id="featured-text"> Featured Recipe </span> <br>
      <span class="spanH2" id="featured-name">Grilled Cheese Sandwiches</span><br>
      <span><img class="rating" id="featured-rating" src="../../images/4-star.png" alt="rating" /></span>
      <span>
        <p id="featured-desc"> A grilled cheese sandwich is not diet food. So when I have one, it has to be great! Crispy, salty, buttery exterior and oozy, molten cheese inside. Are you ready to meet the ultimate cheese toastie?? </p>
      </span>
      <a> See Recipe → </a>
      <br>
      <br>
    </h1>

    <img src="../../images/left-chevron.png" class="chevron-left" id="left-arrow" />
    <img src="../../images/right-chevron.png" class="chevron-right" id="right-arrow" />
  </div>

  <br>
  <br>

  <div>
    <h1 class="text-4xl ml-5 font-semibold text-purple-500">Explore</h1>

    <div class="search-container">
      <form action="#" method="get" class="search-bar">
        <input type="text" placeholder="Search Recipe..." name="search">
        <button type="submit"> <img src="../../images/search23.png"> </button>
      </form>
    </div>

    <!-- Show recipe cards -->
    <div class="grid grid-cols-5 py-8">
      <?php
      include '../../functions/get_recipe_fxn.php';
      include '../../settings/connection.php';

      if (isset($_GET['search'])) {
        get_searched_recipes($conn, $_GET['search']);
      } else {
        get_recipes($conn);
      }
      ?>
    </div>

  </div>

  <script src="../../assets/js/homepage.js"></script>
</body>

</html>
