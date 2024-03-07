<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../assets/css/style.css" />
  <link rel="stylesheet" href="./../assets/css/output.css" />
  <title>Cookitup | Register</title>
</head>

<body class="bg-[#dec3a4] font-mono">
  <div class="flex justify-center">
    <div class="w-1/2">
      <img class="w-full object-cover h-screen" src="./../assets/images/register-image.jpg" alt="Food image" id="register-image">
    </div>
    <div class="w-1/2 flex flex-col items-center justify-center text-center">
      <div class="mb-12 border-b-2 w-full border-b-orange-800">
        <h1 class="text-4xl">Create An Account</h1>
        <div class="pb-4">Already Registered? <a class="text-purple-700 font-semibold" href="./../login/">Login</a></div>
      </div>
      <form id="register" name="register" class="w-1/2">
        <div class="flex flex-col mb-4">
          <label for="fname" class="text-left text-lg">First name:</label>
          <input type="text" id="fname" name="fname" placeholder=" John " class="px-10 py-3 rounded-sm" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="lname" class="text-left text-lg">Surname:</label>
          <input type="text" id="lname" name="lname" placeholder=" Mwangi " class="px-10 py-3 rounded-sm" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="email" class="text-left text-lg">Email Address:</label>
          <input type="email" id="email" name="email" placeholder=" johnmwangi@gmail.com " pattern="^[a-z._\-0-9]*[@][a-z]*.(?:...com)$" class="px-10 py-3 rounded-sm" autocomplete="off" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="passwd" class="text-left text-lg">Password:</label>
          <input type="password" id="passwd" name="passwd" placeholder=" ******** " class="px-10 py-3 rounded-sm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        <input type="submit" value="SIGN UP" class="text-white font-semibold bg-purple-400 px-10 py-2 rounded-md mt-4 cursor-pointer">
      </form>
    </div>
  </div>
</body>

</html>
