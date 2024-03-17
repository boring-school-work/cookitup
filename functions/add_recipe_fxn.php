<?php

session_start();

// Include database connection 
require_once("../settings/connection.php");

// get upload function
require_once("./upload.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image =  $_FILES['food-image'];
  $ingredients = $_POST['ingredient'];
  $instructions = $_POST['instructions'];
  $cook_time = $_POST['cook-time'];

  // get other data for database
  $userId = $_SESSION['user_id'];
  $image_path = upload_image($image);

  // break down ingredients into an array
  // each ingredient is separated by a comma
  $ingredients = explode(",", $ingredients);

  // Prepare SQL statement to insert into recipes table
  $sql = mysqli_prepare(
    $conn,
    "INSERT INTO recipes (title, description, image_url, cook_time, instructions, author_id) 
            VALUES (?, ?, ?, ?, ?, ?)"
  );

  // Bind parameters
  mysqli_stmt_bind_param($sql, "ssssss", $title, $description, $image_path, $cook_time, $instructions, $userId);

  // Execute statement and check for success
  if (!mysqli_stmt_execute($sql)) {
    die("Internal Server Error: Could not insert into database.");
  }

  // set recipe id
  $recipeId = $conn->insert_id;

  // Insert into ingredients table: name, recipe_id
  // start a transaction
  $conn->begin_transaction();

  try {
    // add each ingredient 
    foreach ($ingredients as $ingredient) {
      $query = mysqli_prepare($conn, "INSERT INTO ingredients (name, recipe_id) VALUES (?, ?)");
      mysqli_stmt_bind_param($query, "ss", trim($ingredient), $recipeId);
      mysqli_stmt_execute($query);
    }

    // commit transactions
    mysqli_commit($conn);
  } catch (Exception $e) {
    mysqli_rollback($conn);
    die("Internal Server Error: Could not insert into database: " . $e->getMessage());
  }

  // Close the connection
  $conn->close();

  header("Location: ../view/post?id=$recipeId");
  exit();
}
