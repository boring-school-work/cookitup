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
            orientation:portrait;
            
        }
        #register-image {
            max-width: 35%; 
            height: auto;
            align-items: flex-start;
        }

        #form-content {
            display: flex;
            flex-direction: column;
            align-content: end;
            width: 35%;
            height: auto;
            padding-left: 7%;
            padding-right: 7%;
            padding-top: 5%;
            padding-bottom: 5%;
            background-color: #dec3a4;
        }
        
    </style>
</head>
<body>
    <!-- Register Page -->
    <img src="./../assets/images/register-image.jpg" alt="Food image" id="register-image">
    <form id="form-content">
        <h1 style="font-size:x-large" >Create an account</h1>
        <p>Already Registered? <a href="login.html">Login</a></p> 
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

        <input type="button" onclick="alert('Successfully registered!')" value="Register!" class="ring ring-purple-500" style="background-color: #bb86fc;">
    </form>
</body>
</html>
