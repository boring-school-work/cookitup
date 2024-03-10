<?php

// Include database connection 
require_once("../settings/connection.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image = $_POST['food-image']; 
  $ingredients = $_POST['ingredient'];
  $directions = $_POST['directions'];
  $userId = $_SESSION['user_id']; 

  // Prepare SQL statement
  $sql = "INSERT INTO recipes (title, description, image_url, ingredients, instructions, author_id) 
          VALUES (?, ?, ?, ?, ?, ?)";
          
  $stmt = $conn->prepare($sql)


  // Bind parameters
  $null = NULL; // So we can bind the image
  $stmt->bind_param("ssbssss", $title, $description, $null, $ingredients, $directions, $userId)  //b indicates binary type


  /* send_long_data allows sending data to the server in pieces
   which is necessary for larger binary data like images.
   */

  // Set $null as the image data
  $stmt->send_long_data(2, $image);   //store the actual image in database

  // Execute statement and check for success
  if ($stmt->execute()){
    
    // Success message 
    echo "Recipe added successfully!";

    // Redirect to home page
    header("Location: ../view/home/index.php");

  } 
  else {
    echo "Error adding recipe: " . mysqli_error($conn);
  }

  // Close the prepared statement
  $stmt->close();


  exit();
}


?>
