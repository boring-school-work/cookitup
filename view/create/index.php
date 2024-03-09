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

  <!-- PLACE NAVBAR HERE -->

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
