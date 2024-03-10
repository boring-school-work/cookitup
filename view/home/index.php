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
      <button type="button" id="userButton" class="user-button">
        <span class="button-text" id="username"> The Clean Goblin </span>
        <span class="button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="user-profile-pic" id="usericon"></span>
      </button>
    </h1>

    <img src="../../images/left-chevron.png" class="chevron-left" id="left-arrow" />
    <img src="../../images/right-chevron.png" class="chevron-right" id="right-arrow" />
  </div>

  <br>
  <br>

  <div class="explore-tab">
    <h1 style="margin-left: 100px; color: #8A64D6; font-family: Cambria;">Explore</h1>

    <div class="search-container">
      <form action="/action_page.php" class="search-bar">
        <input type="text" placeholder="Search Recipe..." name="search">
        <button type="submit"> <img src="../../images/search23.png"> </button>
      </form>
    </div>

    <div class="explore-row">

      <div class="recipe-card" style="margin-left: 70px;"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton1" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton12" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton13" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton14" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

    </div>

    <div class="explore-row">

      <div class="recipe-card" style="margin-left: 70px;"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton2" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton22" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton23" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton24" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

    </div>

    <div class="explore-row">

      <div class="recipe-card" style="margin-left: 70px;"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton3" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton32" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton33" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

      <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img" />
        <div class="card-data">
          Garlic Bell Pepper Pasta <br>
          <img src="../../images/5-star.png" class="rating">
          <button type="button" id="miniUserButton34" class="mini-user-button">
            <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
            <span class="mini-button-text"> The Clean Goblin </span>
          </button>
        </div>
      </div>

    </div>

  </div>
  <br>
  <br>
  <br>
  <br>

  <script src="../../assets/js/homepage.js"></script>
</body>

</html>
