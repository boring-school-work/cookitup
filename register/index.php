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
            flex-wrap: wrap;
            margin:0px;
            display: flex;
            justify-content: flex-start;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            
        }
        
        img {
            max-width: 50%;
            height: auto;
            margin-inline-start: 50%;
            justify-content: flex-start;
            

        }
        #container {
            background-color: #dec3a4;
            padding: 20px;
            width: 50%;
            margin-inline-end: 0%;
            justify-content:flex-end;
           
        }
        .flex-container{
            display: flex;
            justify-content: flex-start;
        }
    </style>
</head>
<body>
    <!--Register Page -->
    <div class="flex-container">

        <form>
            <div>
            <img src="./../assets/images/register-image.jpg" alt="Food image" class="place-content-start">
            </div>

            <div id="container" class="place-content-end">
                <h2>Create an account</h2>
                <p>Already Registered? <a href="login.html">Login</a></p> 
                <hr>
                <br>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" placeholder="John"><br><br>
                <label for="surname">Surname:</label><br>
                <input type="text" id="surname" name="surname" placeholder="Mwangi"><br><br>
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" placeholder="johnmwangi@gmail.com" autocomplete="off"><br><br>
                <label for="birthday">Date of Birth:</label><br>
                <input type="date" id="birthday" name="birthday"><br><br>
                <label for="pwd">Password:</label><br>
                <input type="password" id="pwd" name="pwd" placeholder="********"><br><br>
                <input type="button" onclick="alert('Successfully registered!')" value="Register!" class="ring ring-purple-500">
        </div>

    </div>
    </form>
</body>
</html>
