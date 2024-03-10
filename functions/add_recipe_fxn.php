<?php

// Include database connection 
require_once("../settings/connection.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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
  $stmt->bind_param("sssssss", $title, $description, $image, $ingredients, $directions, $userId)

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
