<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <title>CookitUp</title>
    <link rel="icon" id="Favicon" type="image" href="../../images/chef-hat.png">
    <link rel="stylesheet" href="../../assets/css/stylesheet.css">
</head>

<body>
    <div class="container1" id="topBar">
        <img class="menu-burger" src="../../images/chef-hat.png" width="40px"; height="auto";/>
        <img src="../../images/CookitUp white.png" width="180px"; height="auto"; style="float: left; margin-top: 1%;" />
        
        <a style="width: 11%; margin-right: 0px; font-size: medium; font-weight: 100;" id="profile-icon"> <img src="../../images/profile-user.png" class="navbar-icons" /> Not signed in </a>

        <a style="margin-right: 10px;"> <img src="../../images/information.png" class="navbar-icons"/> About </a>

        <!-- <a style="width: 9%;"> <img src="../../images/compas.png" class="navbar-icons"/> Explore  </a> -->

        <a class="current"> <img src="../../images/compas.png" class="navbar-icons"> Home </a>
    </div>

    <div class="featured-tab" id="featuredSection">
        <img src="../../images/Foods/Grilled_Cheese_008-1-c81076b16bc44caea8077666695be94d.jpg" class="featured-img" id="featured-img"/>
        <h1> 
            <span id="featured-text"> Featured Recipe </span> <br> 
            <span class="spanH2" id="featured-name">Grilled Cheese Sandwiches</span><br>
            <span><img class="rating" id="featured-rating" src="../../images/4-star.png" alt="rating" /></span>
            <span> <p id="featured-desc"> A grilled cheese sandwich is not diet food. So when I have one, it has to be great! Crispy, salty, buttery exterior and oozy, molten cheese inside. Are you ready to meet the ultimate cheese toastie?? </p> </span>
            <a> See Recipe → </a> 
            <br>
            <br>
            <button type="button" id="userButton" class="user-button">
                <span class="button-text" id="username"> The Clean Goblin </span>
                <span class="button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="user-profile-pic" id="usericon"></span>
          </button>
        </h1>

        <img src="../../images/left-chevron.png" class="chevron-left" id="left-arrow"/>
        <img src="../../images/right-chevron.png" class="chevron-right" id="right-arrow"/>
    </div>

    <br>
    <br>

    <div class="explore-tab">
    <h1 style="margin-left: 100px; color: #8A64D6; font-family: Cambria;">Explore</h1>

    <div class="search-container">
        <form action="/action_page.php" class="search-bar">
          <input type="text" placeholder="Search Recipe..." name="search">
          <button type="submit"> <img src="../../images/search23.png"> </button>
        </form>
      </div>
    
    <div class="explore-row">

        <div class="recipe-card" style="margin-left: 70px;"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
            Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton1" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton12" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton13" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton14" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

    </div>

    <div class="explore-row">

        <div class="recipe-card" style="margin-left: 70px;"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
            Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton2" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton22" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton23" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton24" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

    </div>

    <div class="explore-row">

        <div class="recipe-card" style="margin-left: 70px;"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
            Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton3" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton32" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton33" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

        <div class="recipe-card"> <img src="../../images/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg" class="recipe-img"/> 
            <div class="card-data">
             Garlic Bell Pepper Pasta <br>
             <img src="../../images/5-star.png" class="rating">
             <button type="button" id="miniUserButton34" class="mini-user-button">
                <span class="mini-button-icon"><img src="../../images/Users/a3lh4g4p0w881.jpg" class="mini-user-profile-pic"></span>
                <span class="mini-button-text"> The Clean Goblin </span>
          </button>
            </div> 
        </div>

    </div>

    </div>
    <br>
    <br>
    <br>
    <br>

<script src="assets/js/homepage.js"></script>
</body>

</html>