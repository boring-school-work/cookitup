<?php

/**
 * Get all recipes from the database and displays a 
 * card component for each recipe
 *
 * @param mysqli $conn
 */
function get_recipes($conn)
{
  // what we need: recipe name, image_url, author's name, recipe id
  $sql = "SELECT recipe_id, title, image_url, CONCAT(fname, ' ', lname) as author_name FROM recipes INNER JOIN users WHERE recipes.author_id = users.user_id";
  $result = $conn->query($sql);

  foreach ($result as $row) {
    $title = $row['title'];
    $image_url = '../../' . $row['image_url'];
    $author_name = $row['author_name'];

    $recipe_id = $row['recipe_id'];
    echo "
      <a href='../post?id=$recipe_id' class='recipe-card' style='margin-left: 70px;'> <img src=$image_url />
        <div class='card-data'>
          $title<br>
          <img src='../../images/5-star.png' class='rating'>
          <button type='button' id='miniUserButton1' class='mini-user-button'>
            <span class='mini-button-icon'><img src='../../images/Users/a3lh4g4p0w881.jpg' class='mini-user-profile-pic'></span>
            <span class='mini-button-text'>$author_name</span>
          </button>
        </div>
      </a>";
  }
}
