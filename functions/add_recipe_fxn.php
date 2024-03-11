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

  // Prepare SQL statement
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
  } else {
    // Success message 
    echo "Recipe added successfully!";
  }

  // Close the connection
  $conn->close();

  // TODO: Redirect to post page
}
