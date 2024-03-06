<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <style>
        * {box-sizing: border-box;}
       
        .navigation {
            overflow: hidden;
            background-color: aqua;
            display: flex;
            align-items: center; 
            justify-content: space-between; 
            color: aqua;
        }
        
        button {
            margin-left: 41vw; 
            width: 8vw;
            height: 5vh;
            border: none; 
            background-color: aqua; 
            color: black; 
            border-radius: 8px;
            cursor: pointer; 
            margin-left: 20px;
        }
        button:hover {
            background-color: #007bff; 
        }
        .description textarea {
            width: 50vw;
            height: 20vw;
            padding: 10px;
            margin-top: 20px;
            resize: none;
        }
        body{
            margin-top: 1px;
            background-color: burlywood;
        }
        .glyphicon {
            font-family: "Glyphicons Halflings";
            font-size: 30px;
            margin-right: 20px;
        }
        .topnav {
            
            display: block;
            font-size: larger;

            }


        img{
            padding-top: 5%;
            padding-right: 0px;
            float: inline-end;
            width: 30vw;
            height: 50vh;
        }
        a{
          justify-content:end; 
          margin-right: 0px;
        }
        .description{
            margin-left: 20px;
        }
        


    </style>
</head>
<body>
    <!-- Top bar Navigation -->
    <div class="navigation" class="topnav">
        <h1 style="font-size:60px; color:#2e5da1;"  >CookitUp</h1> 

        <a href="#home" style="font-size: x-large; color:#2e5da1;" >Home</a>
        <a href="#about" style="font-size: x-large; color:#2e5da1">About</a>
        <a href="#recipe" style="font-size: x-large; color:#2e5da1">Recipe</a>
        <a href="#profile" style="font-size: x-large; color:#2e5da1" ><i class="glyphicon glyphicon-user "></i></a>
       

    </div>

    <img src="./../assets/images/postpage.jpg"

    <div class="description">   
        <div class="description">
        <h3 style="font-family:Georgia, 'Times New Roman', Times, serif;" >Write your Recipe here</h3>
            <textarea placeholder="Write a description for this recipe..."></textarea>

        </div>

    </div>
    <button>Post</button>

</body>
</html>
