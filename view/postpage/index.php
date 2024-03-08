<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookitup - Post Page</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/navbar.css">
  <style>
    * {
      box-sizing: border-box;
    }

    .navigation {
      overflow: hidden;
      background-color: aqua;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: aqua;
      padding: 0px 20px;
    }

    button {
      padding: 10px 15px;
      border: none;
      background-color: aqua;
      color: black;
      border-radius: 8px;
      cursor: pointer;
    }

    button:hover {
      background-color: #007bff;
    }

    .description textarea {
      width: 50%;
      height: 150px;
      padding: 10px;
      margin-top: 20px;
      resize: none;
    }

    body {
      margin: 0px;
      background-color: #dec3a4;
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


    .postimage{
      float: inline-end;
      min-width: 15cm;
      margin-right: 0px;
      height: 12cm;
    }

    /* a {
      justify-content: end;
      margin-right: px;
    } */

  </style>
</head>

<body>
  
  <!-- Top bar Navigation -->
  <div class="container1" id="topBar">
        <img class="menu-burger" src="../../assets/images/chef-hat.png" width="40px"; height="auto";/>
        <img src="../../assets/images/CookitUp white.png" width="180px"; height="auto"; style="float: left; margin-top: 1%;" />
        
        <a style="width: 11%; margin-right: 0px; font-size: medium; font-weight: 100;" id="profile-icon"> <img src="../../assets/images/profile-user.png" class="navbar-icons" /> Not signed in </a>

        <a style="margin-right: 10px;"> <img src="../../assets/images/information.png" class="navbar-icons"/> About </a>

        <!-- <a style="width: 9%;"> <img src="../../assets/images/compas.png" class="navbar-icons"/> Explore  </a> -->

        <a class="current"> <img src="../../assets/images/compas.png" class="navbar-icons"> Home </a>
    </div>

  <img class="postimage" src="../../assets/images/postimage.jpg">
  <div class="description">
    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif;">Write your Recipe here</h3>
    <h4 style="font-family:Georgia, 'Times New Roman', Times, serif;">Description</h4>
    <textarea placeholder="Write a description for this recipe..."></textarea>

  </div>

  </div>
  <button>Post</button>

</body>

</html>
