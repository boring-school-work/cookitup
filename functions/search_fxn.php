<?php


// Include database connection 
require_once("../../settings/connection.php");

// Include get recipe function
require_once("../../functions/get_recipe_fxn.php");



// Initializing the search query 
$search_query = "";

// Check if the search query parameter is set in the URL
if (isset($_GET['search'])) {

  // Sanitize the search query to prevent SQL injection
  $search_query = '%' . $_GET['search'] . '%';

  // Prepare the SQL query to fetch recipes matching the search query
  $sql = "SELECT * FROM recipes WHERE title LIKE ? OR description LIKE ? ";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param('ss', $search_query, $search_query);    // SQL query replaces both "?" 's

  $stmt->execute();
  $result = $stmt->get_result();

  // Display the filtered recipes
  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()){

      // Display recipe details
      echo "<div class='recipe-card' style='margin-left: 70px;'>"; 
      echo "<img src='../../" . $row['image'] . "' />";
      echo "<div class='card-data'>";
      echo "<h3>" . $row['title'] . "</h3>";
      echo "<p>" . $row['description'] . "</p>";
      echo "<img src='../../images/5-star.png' class='rating'>";
      echo "</div>";
      echo "</div>";
    }   
        
  }
  else {
    echo "No recipes found matching your search query.";
  }

  // Close the prepared statement
  $stmt->close();

} 
else {

  // Error handling if statement execution fails
  echo "Error executing query: " . $stmt->error;
}

// Close prepared statement
$stmt->close();

// Close database connection
$conn->close();

?>
