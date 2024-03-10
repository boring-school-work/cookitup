<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: ../home/");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/css/output.css" />
  <title>Cookitup | Create Post</title>
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
      <a href="../create/" class="flex justify-center items-center gap-x-1">
        <img src=" ../../assets/images/create-icon.svg" alt="profile icon" class="w-10 object-contain h-auto" />
        <p>Create</p>
      </a>
      <a href="../../login/" class="flex justify-center items-center gap-x-2">
        <img src=" ../../assets/images/profile-user.png" alt="profile icon" class="w-10 object-contain h-auto" />
        <?php
        echo "<p>" . $_SESSION['username'] . "</p>";
        ?>
      </a>
    </div>
  </header>


  <div class="text-center">
    <h1 class="font-bold text-4xl my-10">Add A Recipe</h1>
    <form action="" name="create-recipe" id="create-recipe" class="flex flex-col gap-y-3">
      <div class="flex justify-center items-center gap-x-3">
        <label for="title" class="text-lg w-36">Title</label>
        <input type="text" name="title" id="title" placeholder="What is the name of your recipe?" class="w-1/2 p-2 my-2 rounded-md border " required>
      </div>
      <div class="flex justify-center items-center gap-x-3">
        <label for="description" class="text-lg w-36">Short Description</label>
        <input type="text" name="description" id="description" placeholder="Provide a short description" class="w-1/2 p-2 my-2 rounded-md border " required>
      </div>
      <div class="flex justify-center items-center gap-x-3">
        <label for="food-image" class="text-lg w-36">Upload image</label>
        <input type="file" accept=".png, .jpg, .jpeg" name="food-image" id="food-image" class="p-3 h-20 w-1/2" required>
      </div>
      <div class="flex justify-center items-center gap-x-3">
        <label for="ingredient" class="text-lg w-36">Ingredients</label>
        <textarea form="create-recipe" name="ingredient" id="ingredient" placeholder="List each ingredient on a new line" class="w-1/2 h-24 p-2 my-2 rounded-md border "></textarea>
      </div>
      <div class="flex justify-center items-center gap-x-3">
        <label for="directions" class="text-lg w-36">Directions</label>
        <textarea form="create-recipe" name="directions" id="directions" placeholder="Place each step on a new line and separate them with 3 hyphens (---)" class="w-1/2 h-80 p-2 my-2 rounded-md border "></textarea>
      </div>
      <div class="flex justify-center">
        <input type="submit" value="Create Recipe" class="text-center w-1/4 p-2 my-2 rounded-md cursor-pointer border bg-purple-500 text-white font-bold" />
      </div>
    </form>
  </div>

</body>

</html>
