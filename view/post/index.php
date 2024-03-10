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

  <header class="bg-purple-500 flex py-3 px-8">
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
        <img src="../../images/compas.png" class="w-10 object-contain h-auto" />
        <p>Home</p>
      </a>
      <a href="../create/" class="flex justify-center items-center gap-x-1">
        <img src=" ../../assets/images/create-icon.svg" alt="profile icon" class="w-10 object-contain h-auto" />
        <p>Create</p>
      </a>
      <a href="../../login/" class="flex justify-center items-center gap-x-2">
        <img src=" ../../assets/images/profile-user.png" alt="profile icon" class="w-10 object-contain h-auto" />
        <p>Not signed in</p>
      </a>
    </div>
  </header>

  <!-- Header for Recipe -->
  <div class="flex justify-center items-start gap-x-5">
    <div>
      <img src="../../assets/images/register-image.jpg" class="object-cover w-96 h-96" alt="recipe image" />
    </div>
    <div class="flex flex-col justify-between w-auto h-96">
      <div class="grow mt-20">
        <h3 class="capitalize font-semibold text-3xl text-center mb-3">title of recipe</h3>
        <p class="">A dish of fried plantain and baked beans</p>
      </div>
      <div>
        <p class="italic font-semibold pb-5">by: John Doe</p>
      </div>
    </div>
  </div>

  <!-- Ingredients & Direction -->
  <div class="mt-8 flex justify-center gap-x-10 px-52">
    <div class="flex flex-col">
      <h3 class="text-xl pb-2">Ingredients</h3>
      <ul>
        <li>Tomatoes</li>
        <li>Tomatoes</li>
        <li>Tomatoes</li>
        <li>Tomatoes</li>
      </ul>
    </div>
    <div class="grow w-full">
      <h3 class="text-xl border-b-2 border-purple-300 w-full pb-2">Instructions</h3>
      <ul class="pl-5">
        <li class="py-3">Step 1</li>
        <li class="py-3">Step 2</li>
        <li class="py-3">Step 3</li>
        <li class="py-3">Step 4</li>
      </ul>
    </div>
  </div>

</body>

</html>