<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/output.css" />
    <title>Cookitup | Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("../assets/images/register-image.jpg");
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
        }

        #register-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 80%;
            max-width: 800px;
            background-color: #dec3a4;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        input[type="button"] {
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-sizing: border-box;
        }

        input[type="button"] {
            cursor: pointer;
            background-color: #bb86fc;
            color: #fff;
            border: none;
            transition: background-color 0.3s;
        }

        input[type="button"]:hover {
            background-color: #8a63d2;
        }

        hr {
            width: 80%;
            border-color: blueviolet;
            margin-top: 20px;
            border-width: 1.5px;
        }

        .login-link {
            color: blue;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
  <div id="register-content">
    <h1 class="text-4xl">Create An Account</h1>
    <div class="pb-4">Already Registered? <a href="./../login/" class="login-link">Login</a></div>
    <hr>
    <form id="register" name="register">
      <div>
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" placeholder="John">
      </div>
      <div>
        <label for="lname">Surname:</label>
        <input type="text" id="lname" name="lname" placeholder="Mwangi">
      </div>
      <div class="flex flex-col mb-4">
        <label for="email" >Email Address:</label>
        <input type="email" id="email" name="email" placeholder="johnmwangi@gmail.com" autocomplete="off">
      </div>
      <div>
        <label for="passwd">Password:</label>
        <input type="password" id="passwd" name="passwd" placeholder="********">
      </div>
      <input type="submit" value="SIGN UP" class="text-white font-semibold bg-purple-400 px-10 py-2 rounded-md mt-4 cursor-pointer">
    </form>

  </div>
</body>
</html>
