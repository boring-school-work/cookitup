<?php
session_start();

if (!isset($_GET['id'])) {
  header('Location: ../home/');
  exit();
}

include '../../settings/connection.php';
include '../../functions/view_recipe_fxn.php';

$path = "";
$name = "";

if (isset($_SESSION['username'])) {
  $path = "../../logout/";
  $name = $_SESSION['username'];
} else {
  $path = "../../login/";
  $name = "Not signed in";
}

$id = $_GET['id'];
$recipe = get_recipe_data($conn, $id);
$image_url = '../../' . $recipe['image_url'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/css/output.css" />
  <title>Cookitup</title>
</head>

<body class="bg-[#f1e8d5]">

  <header class="bg-gradient-to-r from-purple-500 from-30% to-blue-400 flex py-3 px-8">
    <div class="grow">
      <div class="flex">
        <img src="../../assets/images/chef-hat.png" alt="chef hat" class="w-10 h-auto object-contain" />
        <a href="../home/">
          <img src="../../assets/images/CookitUp white.png" alt="cookitup logo" class="w-44 h-auto" />
        </a>
      </div>
    </div>
    <div class="flex gap-x-5 justify-center items-center text-white font-semibold">
      <a href="../home/" class="flex justify-center items-center gap-x-2">
        <img src="../../assets/images/compas.png" class="w-10 object-contain h-auto" />
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
      </a>
    </div>
  </header>

  <!-- Header for Recipe -->
  <div class="flex justify-center items-center gap-x-5 w-full">
    <img src=<?php echo $image_url ?> class="object-cover w-96 h-96" alt="recipe image" />
    <div class="flex flex-col w-1/4">
      <div class="mb-16">
        <h3 class="capitalize font-semibold text-3xl mb-3"><?php echo $recipe['title'] ?></h3>
        <p class=""><?php echo $recipe['description'] ?></p>
      </div>
      <div>
        <p class="italic pb-1">Estimated cooked time (minutes): <?php echo $recipe['cook_time'] ?></p>
        <p class="italic font-semibold pb-5">by: <?php echo $recipe['author_name'] ?></p>
      </div>
    </div>
  </div>

  <!-- Ingredients & Direction -->
  <div class="mt-8 flex justify-center gap-x-10 px-52 pb-3">
    <div class="flex flex-col">
      <h3 class="text-2xl pb-2">Ingredients</h3>
      <ul>
        <?php
        foreach ($recipe['ingredients'] as $ingredient) {
          foreach ($ingredient as $key => $value) {
            echo "<li class='py-1'>" . ucfirst($value) . "</li>";
          }
        }
        ?>
      </ul>
    </div>
    <div class="grow w-full">
      <h3 class="text-3xl border-b-2 border-purple-300 w-full pb-2">Instructions</h3>
      <ol class="pl-5 list-decimal mx-10">
        <?php
        $instructions = explode("---", $recipe['instructions']);
        echo "<li class='py-3'>" . implode("</li><li class='py-3'>", $instructions) . "</li>";
        ?>
      </ol>
    </div>
  </div>
  <?php
  if ($_SESSION['user_id'] == $recipe['author_id']) {
    echo "<div class='flex gap-x-3 justify-end mb-10 mx-10'>
      <form action='../../functions/delete_recipe_fxn.php' method='get'>
        <input class='hidden' name='recipe_id' value=$id />
        <input type='submit' value='Delete' class='px-4 py-1 bg-red-500 text-white rounded-lg cursor-pointer' />
      </form>
      </div>
";
  }
  ?>
</body>

</html>
