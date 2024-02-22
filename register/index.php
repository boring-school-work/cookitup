<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/output.css" />
    <title>Register Page</title>
    <style>
        body {
            display: flex;
            justify-content:space-evenly; 
            align-items: center; 
            height: 100vh; 
            background-color:#dec3a4;
           
        }

        #register-content {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            width: 80%;
            max-width: 800px; 
            padding: 20px; 
            background-color: #dec3a4; 
            border-radius: 10px; 
        }

        #register-image {
            max-width: 800px;
            width:50%;
            height: auto; 
            inset-inline-start:inherit;
        }

        #form-content {
            width: 45%;
            height:inherit;
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
            padding: 10px; 
            margin-bottom: 15px; 
            border: 1px solid #ccc; 
            border-radius: 5px;
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
    </style>
</head>
<body>
    <div id="register-content">

        <!-- Register Page -->
        <img src="./../assets/images/register-image.jpg" alt="Food image" id="register-image">
        <form id="form-content">
            <h1 style="font-size:x-large" >Create an account</h1>
            <p>Already Registered? <a href="login.html" style="color: blue;" > Login</a></p> 
            <hr>
            <br>

            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" placeholder=" John "><br>

            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" placeholder=" Mwangi "><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder=" johnmwangi@gmail.com " autocomplete="off"><br>

            <label for="birthday">Date of Birth:</label>
            <input type="date" id="birthday" name="birthday"><br>

            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd" placeholder=" ******** "><br>

            <input type="button" onclick="alert('Successfully registered!')" value="Register!" class="ring ring-purple-500">
        </form>
    </div>
</body>
</html>
