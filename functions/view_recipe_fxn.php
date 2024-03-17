<?php

/** Gets the recipe data from the database
 * Returns an array of the recipe data
 *
 * @param int $id
 * @param mysqli $conn
 * @return array
 */
function get_recipe_data($conn, $id)
{
  $id = (int) $conn->real_escape_string($id);
  $result = $conn->query(
    "
    SELECT author_id, title, description, cook_time, image_url, instructions,
    CONCAT(fname, ' ', lname) AS author_name
    FROM recipes
    INNER JOIN users
    ON author_id=user_id
    WHERE recipe_id =$id
    "
  );
  $recipe = $result->fetch_assoc();
  $ingredients = $conn->query("SELECT name FROM ingredients WHERE recipe_id=$id");
  $recipe['ingredients'] = $ingredients;

  $conn->close();

  return $recipe;
}
